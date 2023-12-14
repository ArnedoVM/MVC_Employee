<?php
    //To call the Model Object: EmployeeModel
    require_once(__DIR__.'/../Models/EmployeeModel.php');

    class EmployeeController {

        private $employeeModel;

        public function __construct() {
            $this->employeeModel = new EmployeeModel();
        }


        public function registrationPage() {
            require_once('./public/views/EmployeeRegistration.php');
        }


        public function createEmployee(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $birth_date = $_POST['birth_date'];
                $hire_date = $_POST['hire_date'];
                $job_title = $_POST['job_title'];
                $department = $_POST['department'];
                $result = $this->employeeModel->createEmployee($first_name, $last_name, $birth_date, $hire_date, $job_title, $department);
                //$result = $this->employeeModel->createEmployee($first_name, $last_name, $birth_date,$job_title, $department);
                return $result;
            }
            if ($result) {
                // Redirect back to the registration
                // page with a success query parameter
                header('Location: /register?success=1');
                exit();
            } else {
                echo 'Failed to create employee';
            }
        }

    }


?>