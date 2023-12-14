<?php
// require_once('../config/db_config.php');
require_once('./config/db_config.php');

class EmployeeModel {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    // public function createEmployee($first_name,$last_name,$birth_date,$hire_date,$job_title,$department)
    // {
    //     $sql="INSERT INTO employee (first_name,last_name,birth_date,hire_date,job_title,department) VALUES ('$first_name','$last_name','$birth_date','$hire_date',$job_title','$department')"; 
    //     //$sql="CALL SP_Add_New_Employee ($first_name,$last_name,$birth_date,$hire_date,$job_title,$department,$salary)"; 
    //     $result = mysqli_query($this->conn, $sql);
    //     return $result;
    // }

    public function createEmployee($first_name,$last_name,$birth_date,$hire_date,$job_title,$department)
    {
        //$sql="INSERT INTO employee (first_name,last_name,birth_date,hire_date,job_title,department) VALUES ('$first_name','$last_name','$birth_date','$hire_date','$job_title','$department')"; 
        $sql="CALL SP_Add_New_Employee ('$first_name','$last_name','$birth_date','$hire_date','$job_title','$department')"; 
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    
}

?>