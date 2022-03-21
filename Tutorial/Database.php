<?php

class Database
{
    /** @var PDO */
    private $dbConn;

    public function __construct()
    {
        try {
            $this->dbConn = new PDO(""); //Actual Connection
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
