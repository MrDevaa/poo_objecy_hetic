<?php

namespace Narut\ClassicModel\DBAL;

class Connector
{
    const DSN = "mysql:dbname=classicmodels;host=localhost";

    public \PDO $dbh;

    public function __construct() 
    {
        $this->dbh = new \PDO(self::DSN, 'root', '');
    }
}