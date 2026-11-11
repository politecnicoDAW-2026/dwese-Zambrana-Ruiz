<?php
include "config.php";

class Database {
    public static PDO $pdo;
    public static function connect(): PDO {
        self::$pdo = new PDO(DSN, USER, PASS);
        return self::$pdo;
    }
}