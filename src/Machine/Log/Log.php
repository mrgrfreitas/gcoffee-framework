<?php
declare(strict_types=1);


namespace Machine\Log;

use Exception;
use ErrorException;
use Machine\Iginition\Flame;
use Illuminate\Support\Facades\Date;

// Load the global dump() function
require_once __DIR__.'/Resources/functions/gdebug.php';

class Log extends Exception
{

    public function __construct()
    {
        if (config('app.debug') == true){

            error_reporting(E_ALL);
            ini_set( "display_errors", "on" );

            set_exception_handler(array($this, 'exceptionHandler'));
            set_error_handler(array($this, 'errorHandler'));

            $this->shutdown();

        }else{
            //SAVE IN LOG FILE TOO
            ini_set( "display_errors", "off" );
            set_exception_handler(array($this, 'exceptionHandler'));
            $this->shutdown();
        }
    }

    /**
     * @param $e
     * @return void
     */
    public function exceptionHandler($e)
    {

        http_response_code(500);

        if (filter_var(ini_get('display_errors'),FILTER_VALIDATE_BOOLEAN)) {

            Flame::make($e);

        } else {

            $this->saveLog($e);
            $logMsg = $e->getMessage(). "/ ON FILE: " . $e->getFile(). "/ LINE: " . $e->getLine();
            $this->telegramLog($logMsg);

            echo "<h1>500 Internal Server Error</h1>
              An internal server error has been occurred.<br>
              Please try again later.";
        }
        exit;
    }

    public static function check_exception($e)
    {
        return (new Log())->exceptionHandler($e);
    }

    /**
     * @param $num
     * @param $str
     * @param $file
     * @param $line
     * @param $context
     * @return void
     */
    public function errorHandler( $num, $str, $file, $line, $context = null )
    {
        $this->exceptionHandler( new ErrorException( $str, 0, $num, $file, $line ));
    }

    /**
     * @return void
     */
    public function shutdown()
    {
        register_shutdown_function(function ()
        {
            $error = error_get_last();
            if ($error !== null) {
                $e = new ErrorException(
                    $error['message'], 0, $error['type'], $error['file'], $error['line']
                );
                $this->exceptionHandler($e);
            }
        });
    }

    public static function display_error_page($code)
    {
        Flame::errorPage($code);
    }

    protected function saveLog($error)
    {
        fopen( config('logging.emergency'), 'w' );

        $date = "*********************" . Date::now()->toDateTimeString() . "*********************";
        file_put_contents(config('logging.emergency'), $date, FILE_APPEND);
        file_put_contents(config('logging.emergency'), $error, FILE_APPEND);
    }

    protected function telegramLog($msg)
    {
        $logg = new Logger();
        $logg->telegramHandler('emergency', $msg);
    }

    public static function emergency($message, array $context = [])
    {
        return (new Logger())->emergency($message, $context);
    }

}