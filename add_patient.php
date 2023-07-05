<?php
require("databaseHandler.php");

class add_patient {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost", "root", "", "test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $number = $_POST["number"];
            $address = $_POST["address"];
            $sickness = $_POST["sickness"];
            $doctor_name = $_POST["doctor_name"];
        }

        $data = array(
            "id" => "",
            "name" => $name,
            "number" => $number,
            "address" => $address,
            "sickness" => $sickness,
            "doctor_name" => $doctor_name
        );

        $database->insertData("patient", $data);
        
    }
}

// calling the method from the databaseHandler class to insert the data
$add_patient = new add_patient();
$add_patient->insertDataIntoDatabase();


?>