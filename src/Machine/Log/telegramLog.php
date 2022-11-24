<?php

namespace Machine\Log;

class telegramLog
{

    public static function emergency($message, array $context = [])
    {
        return (new Logger())->emergencyt(__FUNCTION__, $message, $context);
    }

}