<?php

require "../connection/Connection.php";

class Employee extends Connection
{
    public $conn;

    public function __construct()
    {
        $this->conn = $this->connection_database();
    }

    public function get_all_employees($where)
    {
        try {
            $sql = "SELECT id_employee, emp_id, first_name, last_name,age, birth_date FROM tbl_employee $where";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}