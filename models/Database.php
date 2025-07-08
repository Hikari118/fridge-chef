<?php
// models/Database.php

class Database {
    private $host = "localhost";
    private $db_name = "fridgechef_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->db_name;charset=utf8",
                $this->username,
                $this->password
            );
        } catch (PDOException $exception) {
            echo "接続エラー: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
