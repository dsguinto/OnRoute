<?php
namespace OnRoute\models;
use PDO;
class Database{
    
    private static $user ="root";
    private static $pass = "";
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

