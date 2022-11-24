<?php


namespace Machine\Exception;


use Exception;

class ForbiddenException extends Exception
{

    protected $message = FORBIDDEN;
    protected $code = 403;

}