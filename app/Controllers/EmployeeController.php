<?php

namespace App\Controllers;

use App\Models\Employee;

class EmployeeController {

    public function list() {
        $employee = new Employee();
        $result = $employee->getAllEmployees();
        include 'app/Views/index.php';
    }

    public function show(int $id) {
        $employee = new Employee();
        $result = $employee->getOneEmployee($id);
        include 'app/Views/detail.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employee = new Employee();
            $employee->name = $_POST['name'];
            $employee->age = $_POST['age'];
            $employee->email = $_POST['email'];
            if ($employee->createEmployee()) {
                header('Location: index.php');
            }
        } else {
            include 'app/Views/create.php';
        }
    }

    public function delete(int $id) {
        $employee = new Employee();
        if ($employee->deleteEmployee($id)) {
            header('Location: index.php');
        }
    }

    public function update(int $id) {
        $employee = new Employee();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employee->name = $_POST['name'];
            $employee->age = $_POST['age'];
            $employee->email = $_POST['email'];
            if ($employee->updateEmployee($id)) {
                header('Location: index.php');
            }
        } else {
            $old_employee = $employee->getOneEmployee($id);
            include 'app/Views/update.php';
        }
    }
}
