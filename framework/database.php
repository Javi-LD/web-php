<?php

class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = 'mysql:localhost=3306;dbname=web-php;charset=utf8mb4';
        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }
}


?>