<?php

require "../model/Employee.php";

class EmployeeController
{

    public $employee;
    public function __construct()
    {
        $this->employee = new Employee();
    }

    public function load_all_employee($where = null)
    {
        return $this->employee->get_all_employees($where);
    }

}