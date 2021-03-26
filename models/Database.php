<?php
namespace OnRoute\models;
use PDO;
class Database{
    private static $user ="daniiwkh_thewebdevs";
    private static $pass = "VXaTDeydZ%KO";
    private static $dsn = "mysql:host=162.0.215.27;dbname=daniiwkh_onroute";
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