<?php

require "../controller/EmployeeController.php";


$employee = new EmployeeController();
$action   = $_GET['action'];

if($action == "getEmployees")
{
    $employee_list = $employee->load_all_employee();
 
    $datastorage = [];
    foreach ($employee_list as $employees) {
        $datastorage[] = [
            "id_employee"       => $employees["id_employee"],
            "emp_id"            => $employees["emp_id"],
            "first_name"        => $employees["first_name"],
            "last_name"         => $employees["last_name"],
            "age"               => $employees["age"],
            "birth_date"        => $employees["birth_date"],
        ];
    }
    
    echo json_encode($datastorage);
}
