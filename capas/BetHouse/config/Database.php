<?php
class Database
{
    private static $dbh;

    private function __construct() {}

    private function __clone() {}

    public function getConnect()
    {
        if (!(self::$dbh instanceof self)) {
            try {
                self::$dbh = new PDO('mysql:host=localhost;dbname=capas', 'root', '');
                self::$dbh->query('SET NAMES utf8');
            } catch (PDOeXCEPTION $e) {
                echo $e->getMessage();
            }
        }

        return self::$dbh;
    }
}