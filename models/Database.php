<?php
namespace OnRoute\models;
use PDO;
class Database{
    
    // private static $user ="moeasakr_the_webdevs";
    // private static $pass = "rk,O#Nuwn]wJ";
    // private static $dsn = "mysql:host=198.50.215.64;dbname=moeasakr_onroute";
    
    private static $user ="root";
    private static $pass = "root";//for mamp log in - Nai
    private static $dsn = "mysql:host=localhost;dbname=onroute";

    private static $dbcon;

    private function __construct() {

    }

    public static function getDB() {
        if (!isset(self::$dbcon)) {
            self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
        }
        return self::$dbcon;
    }
}

