<?php

namespace Machine\Support;
use Dotenv\Dotenv;


class Env
{

    public static function get(string $key, $default = null)
    {
        $DIR = str_replace('\Machine', '', dirname(__DIR__));

        $dotEnv = Dotenv::createMutable($DIR);
        $dotEnv->load();

        return $_ENV[$key] ?? false;

    }
}