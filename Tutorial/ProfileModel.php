<?php

class ProfileModel
{
    /** @var PDO */
    private $db;

    private $table = "profile";

    public function __construct($dbConn)
    {
        $this->db = $dbConn;
    }

    public function create($firstname, $lastname)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (`firstname`, `lastname`)
            VALUES (:firstname, :lastname)");

        $stmt->bindValue(":firstname", $firstname);
        $stmt->bindValue(":lastname", $lastname);
        $stmt->execute();
    }
}
