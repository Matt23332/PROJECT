<?php
require("databaseHandler.php");

class add_doctor {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost", "root", "", "test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $doctor_name = $_POST["doctor_name"];
            $specialty = $_POST["specialty"];
            $experience = $_POST["experience"];
        }

        $data = array(
            "doctor_name" => $doctor_name,
            "specialty" => $specialty,
            "experience" => $experience
        );

        $database->insertData("doctor", $data);
    }
}

// calling the method from the databaseHandler class
$add_doctor = new add_doctor();
$add_doctor->insertDataIntoDatabase();
?>