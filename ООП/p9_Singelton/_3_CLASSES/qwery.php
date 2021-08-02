<?php


namespace _3_CLASSSES;


class qwery
{
    // mysql_query() с SQL-запросом SHOW COLUMNS FROM table [LIKE 'name'].
    //SHOW TABLES [FROM db_name] [LIKE 'pattern'].   - показывает
    private $str = null;
    private $db;
    public function __construct(\mysqli $db)
    {
         $this->db = $db;
    }

    public function () : array{

    }

    public function Get($db): ?static
    {
        $db->query("")
        $this->str = "select"
    }
}