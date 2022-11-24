<?php


use Machine\Http\Request;


/**
 * Return the first array key name of request data...
 * e.g. <b>p or page</b>
 */
define('VAR_NAME', array_key_first((new Request())->getData()));

const PREVIOUS_LINK = 'Previous';
const NEXT_LINK     = 'Next';

//FORBIDDEN ERROR

const NOT_FOUND = 'This Page Not Found...';
const FORBIDDEN = 'You don\'t have permission to access this page...';
