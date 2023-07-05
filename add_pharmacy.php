<?php
require ("databaseHandler.php");

class add_pharmacy {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost","root","","test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $number = $_POST["number"];
        }

        $data = array(
            "id" => "",
            "name" => $name,
            "address" => $address,
            "number" => $number
        );

        $database->insertData("pharmacy", $data);
    }
}

//calling the method from the databaseHandler class
$add_pharmacy = new add_pharmacy();
$add_pharmacy->insertDataIntoDatabase();
?>