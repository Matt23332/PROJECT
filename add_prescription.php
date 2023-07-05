<?php
require ("databaseHandler.php");

class add_prescription {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost","root","","test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $drug_name = $_POST["drug_name"];
            $date = $_POST["date"];
            $quantity = $_POST["quantity"];
        }
        $data = array(
            "id" => "",
            "name" => $name,
            "drug_name" => $drug_name,
            "date" => $date,
            "quantity" => $quantity
        );
        $database->insertData("prescription",$data);
    }
}

//calling the method from the databaseHandler class to insert the data
$add_prescription = new add_prescription();
$add_prescription->insertDataIntoDatabase();

?>