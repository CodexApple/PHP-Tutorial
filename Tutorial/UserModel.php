<?php

class UserModel
{
    /** @var PDO */
    private $db;

    private $table = "user";

    public function __construct($dbConn)
    {
        $this->db = $dbConn;
    }

    public function create($username, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (`username`, `password`)
            VALUES (:username, :password)");

        $stmt->bindValue(":username", $username);
        $stmt->bindValue(":password", $password);
        $stmt->execute();

        $last_insert_id = $this->db->lastInsertId();
        return $last_insert_id;
    }

    public function read()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = 1");
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }
}
