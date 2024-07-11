<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\EmployeeController;

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$employee = new EmployeeController();

if ($action == 'index') {
    $employee->list();
} else if ($action == 'detail') {
    $employee->show($id);
} else if ($action == 'create') {
    $employee->create();
} else if ($action == 'delete') {
    $employee->delete($id);
} else if ($action == 'update') {
    $employee->update($id);
}
