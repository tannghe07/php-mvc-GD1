<?php

namespace App\Models;

use PDO;
use PDOException;

class Employee {

    public $connect;
    public string $name;
    public int $age;
    public string $email;
    private string $tableName = 'employee';

    public function __construct() {
        try {
            $connect = new PDO('mysql:host=127.0.0.1;dbname=php_kiai', 'root', 'root');
        }
        catch (PDOException $e){
            echo "Connection error: " . $e->getMessage();
        }
        $this->connect = $connect;
    }

    public function getAllEmployees() {
        $employees = $this->connect->prepare('SELECT * FROM ' . $this->tableName);
        $employees->execute();
        return $employees->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneEmployee(int $id) {
        $employee = $this->connect->prepare('SELECT * FROM ' . $this->tableName . ' WHERE id = ?');
        $employee->bindParam(1, $id);
        $employee->execute();
        return $employee->fetch(PDO::FETCH_ASSOC);
    }

    public function createEmployee() {
        $employee = $this->connect->prepare('INSERT INTO ' . $this->tableName . ' (name, age, email) VALUES (?, ?, ?)');
        $employee->bindParam(1, $this->name);
        $employee->bindParam(2, $this->age);
        $employee->bindParam(3, $this->email);
        if ($employee->execute()) {
            return true;
        }
        return false;
    }

    public function deleteEmployee(int $id) {
        $employee = $this->connect->prepare('DELETE FROM ' . $this->tableName . ' WHERE id = ?');
        $employee->bindParam(1, $id);
        if ($employee->execute()) {
            return true;
        }
        return false;
    }

    public function updateEmployee(int $id) {
        $employee = $this->connect->prepare('UPDATE ' . $this->tableName . ' SET name = ?, age = ?, email = ? WHERE id = ?');
        $employee->bindParam(1, $this->name);
        $employee->bindParam(2, $this->age);
        $employee->bindParam(3, $this->email);
        $employee->bindParam(4, $id);
        if ($employee->execute()) {
            return true;
        }
        return false;
    }
}
