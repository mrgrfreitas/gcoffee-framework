<?php


namespace Machine\Exception;


use Exception;

class NotFoundException extends Exception
{

    protected $message = NOT_FOUND;
    protected $code = 404;

}