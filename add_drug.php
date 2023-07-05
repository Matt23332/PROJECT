<?php
require ("databaseHandler.php");

class add_drug {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost","root","","test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $formula = $_POST["formula"];
            $price = $_POST["price"];
            $company_name = $_POST["company_name"];
            $manufacture_date = $_POST["manufacture_date"];
            $expiry_date = $_POST["expiry_date"];
        }

        $data = array(
            "id" => "",
            "name" => $name,
            "formula" => $formula,
            "price" => $price,
            "company_name" => $company_name,
            "manufacture_date" => $manufacture_date,
            "expiry_date" => $expiry_date
        );

        $database->insertData("drug",$data);
    }
}
// calling the method from the databaseHandler class to insert the data
$add_drug = new add_drug();
$add_drug->insertDataIntoDatabase();

?>