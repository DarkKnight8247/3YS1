<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $dbname;

    protected $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'castor_lms_db';
    }

    public function connect() {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname

        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return($this->conn);
    }
}

$database = new Database();
$database->connect();
?>