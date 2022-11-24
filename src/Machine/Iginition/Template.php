<?php

namespace Machine\Iginition;

class Template
{

    protected $file;
    public $values;

    public function __construct()
    {
        $file = __DIR__. DIRECTORY_SEPARATOR . 'layout'. DIRECTORY_SEPARATOR .'flame.php';
        if (!file_exists($file)) die('unable to locate iginition flame or dump file');
        $this->file = $file;
    }

    /**
     * arg must be an array
     * @param $values
     * @return void
     */
    public function set( $values ) {
        $this->values = $values;
    }

    /**
     * render's html with keys replaced
     * @return void
     */
    public function render()
    {
        $file = $this->file;
        $values = $this->exceptionToArray($this->values);
        return $this->render_template( $file, $values);
    }

    /**
     * @return null
     */
    public function renderHtml()
    {
        $file = __DIR__. DIRECTORY_SEPARATOR . 'layout'. DIRECTORY_SEPARATOR .'dump.php';
        if (!is_array($this->values)){
            $this->values = [$this->values];
        }
        $values = ['debugger' => $this->values];
        return $this->render_template( $file, $values);
    }

    public function renderErrorPage($code)
    {
        switch ($code) {
            case "404":
                echo "<h1>404 - PAGE NOT FOUND</h1>
              WE ARE SORRY, BUT THE PAGE YOU REQUESTED WAS NOT FOUND.<br>.";
                break;
            case "500":
                echo "<h1>500 Internal Server Error</h1>
              An internal server error has been occurred.<br>
              Please try again later.";
                break;
            default:
                echo "error";
        }
    }

    /**
     * @param $exception
     * @return array
     */
    public function exceptionToArray($exception)
    {

        return [
            'message'       => $exception->getMessage(),
            'code'          => $exception->getCode(),
            'file'          => $exception->getFile(),
            'line'          => $exception->getLine(),
            'trace_string'  => $exception->getTraceAsString(),
            'trace'         => $exception->getTrace(),
            'type'          => get_class($exception)
        ];
    }

    /**
     * @return void
     */
    protected function render_template( /*$file, $values*/ )
    {
        ob_start();

        foreach ( func_get_args()[1] as $key => $value) {
            ${$key} = $value;
        }


        include func_get_args()[0];

        //ob_get_clean();
    }
    
    
}