<?php
namespace _3_CLASSSES;
use mysqli;

final  class DB extends Adb
{
    private function __construct($hostname="localhost",$username="root",$password="root",$port=8889)
    {

        $this->connectToSQLServer($hostname,$username,$password,$port);
    }
    public static function  newDB($name)
    {

    }
    function connectToSQLServer($hostname = "localhost", $username = "root", $password = "root", $port = 8889): ?\mysqli
    {

        self::$Host = new mysqli($hostname,$username,$password,'',$port);
        if(self::$Host->connect_error) return null;
        return self::$Host;
    }

    function createDB($nameDB): ?\mysqli
    {
        self::$Host->query("CREATE DATABASE  ".$nameDB);
        return null;
    }

    function connectToDB($nameDB): ?\mysqli
    {
        self::$Host->query("USE ".$nameDB);

        return self::$Host;
    }

    function existsDB($nameDB): ?\mysqli
    {
        // TODO: Implement existsDB() method.

        return null;
    }

    function DeleteDB($nameDB): ?\mysqli
    {
        // TODO: Implement DeleteDB() method.
        return null;
    }

    function choseDB($nameDB): ?\mysqli
    {
        $this->connectToDB();

        return null;
    }

    public static function showAllDB(): ?array
    {
        self::$listDB= self::$instans->query("SELECT name, database_id, create_date FROM sys.databases ;")->fetch_row();
        return self::$listDB;
    }
}