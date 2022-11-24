<?php

namespace Machine\Database\Connection;


use Machine\Log\Log;
use PDO;
use PDOException;

/**
 * Class Conn
 * @package Machine\Connection
 * @author Geraldo Freitas
 */
abstract class Conn {

    private static $Drive;
    private static $Host;
    private static $User;
    private static $Pass;
    private static $Dbsa;
    private static $Options;

    /**
     * @var PDO
     */
    private static $Connect = null;

    public function __construct()
    {
        self::$Drive   = config('database.connections.mysql.driver');
        self::$Host    = config('database.connections.mysql.host');
        self::$User    = config('database.connections.mysql.username');
        self::$Pass    = config('database.connections.mysql.password');
        self::$Dbsa    = config('database.connections.mysql.database');
        self::$Options = config('database.connections.mysql.options');
    }


    /**
     * Connects to database with singleton pattern.
     * Returns a PDO object!
     * @return PDO|null
     */
    private static function Connecting() {
        try {
            if (self::$Connect == null):
                $dsn = self::$Drive . ':host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = self::$Options;
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
            endif;
        } catch (PDOException $e) {
            Log::check_exception($e);
            die;
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /**
     * Returns a PDO Singleton Pattern object.
     * @return PDO|null
     */
    protected static function getConn() {
        return self::Connecting();
    }

}