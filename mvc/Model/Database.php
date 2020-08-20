<?php

class Database
{
    private static $dbh;

    private function __construc() {}

    private function __clone() {}

    public static function getConnect()
    {
        if (!(self::$dbh instanceof self)) {
            try {
                self::$dbh = new PDO('mysql:host=localhost;dbname=mvc','root','');
                self::$dbh->query('SET NAMES utf8');
            } catch (PDOException $e) {
                echo e->getMessage();
            }
        }

        return self::$dbh;
    }
}