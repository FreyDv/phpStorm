<?php

namespace _3_CLASSSES;

abstract class Adb
{
    protected static \mysqli $Host;
    protected static array $listDB;
    protected static \mysqli $curentDB;
    protected string $hostname;
    protected string $username;
    protected string $password;
    protected string $database;
    protected int    $port;
    abstract function __construct($hostname = "localhost", $username = "root", $password = "root", $port = 8889);

    abstract function connectToSQLServer($hostname = "localhost", $username = "root", $password = "root", $port = 8889): ?\mysqli;

    abstract function createDB($nameDB): ?\mysqli;

    abstract function connectToDB($nameDB): ?\mysqli;

    abstract function existsDB($nameDB): ?\mysqli;

    abstract function deleteDB($nameDB): ?\mysqli;

    abstract function choseDB($nameDB): ?\mysqli;

    abstract static public function showAllDB() :?  array;
}