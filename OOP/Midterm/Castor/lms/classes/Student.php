<?php
require_once __DIR__ . '/../config/Database.php';

class Student extends Database {
    public function __construct() {
        parent::__construct();
        $this->connect();
    }

    public function addStudent($name, $email, $studentPhone, $registrationNumber) {
        $stmt = $this->conn->prepare("INSERT INTO students (name, email, phone, registration_no) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $registrationNumber);
        return $stmt->execute();
    }
}
?>