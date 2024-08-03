<?php

namespace App\Database;

use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const USER = "postgres";
    private const DBNAME = "hey_teacher";
    private const PASSWD = "830314";

    private const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    protected static PDO $instance;

    public static function getInstance(): string|PDO
    {
        try {
            return self::$instance = new PDO(
                'pgsql:host=' . self::HOST . ';dbname=' . self::DBNAME,
                self::USER,
                self::PASSWD,
                self::OPTIONS
            );
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
    }
}