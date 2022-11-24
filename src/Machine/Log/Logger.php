<?php

namespace Machine\Log;

use Monolog\Logger as Monolog;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\TelegramBotHandler;

class Logger
{

    protected $monolog;


    public function __construct()
    {
        $this->monolog = new Monolog('gCoffee');
    }

    /**
     * @param $message
     * @param array $context
     * @return void
     */
    public function emergency($message, array $context = []): void
    {
        $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function emergencyt($level, $message, array $context = []): void
    {
        $this->telegramHandler($level, $message, $context);
    }


    /**
     * @param $level
     * @param $message
     * @param $context
     * @return void
     */
    protected function writeLog($level, $message, $context): void
    {
        $this->monolog->pushHandler(new StreamHandler(config('logging.emergency'), Monolog::DEBUG));

        //OPICIONAL
        $this->monolog->pushProcessor(function ($record){
            $record['extra']['HTTP_HOST'] = $_SERVER['HTTP_HOST'];
            $record['extra']['REQUEST_URI'] = $_SERVER['REQUEST_URI'];
            $record['extra']['REQUEST_METHOD'] = $_SERVER['REQUEST_METHOD'];
            $record['extra']['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
            return $record;
        });

        $this->monolog->{$level}($message, $context);

    }

    public function telegramHandler($level, $message, $context = [])
    {
        $teleKey = '5687049606:AAGBp2yXWfbryFivoqLq_UIeRcBWscKCPxY';
        $teleChanel = '-1001693691914';
        $handler = new TelegramBotHandler($teleKey, $teleChanel, Monolog::EMERGENCY);
        $handler->setFormatter(new LineFormatter('%level_name%: %message%'));
        $this->monolog->pushHandler($handler);

        $this->monolog->{$level}($message, $context);
    }


}