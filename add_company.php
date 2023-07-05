<?php
require ("databaseHandler.php");

class add_company {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost","root","","test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $company_name = $_POST["company_name"];
            $number = $_POST["number"];
        }

        $data = array(
            "id" => "",
            "company_name" => $company_name,
            "telNumber" => $number
        );

        $database->insertData("pharmaceutical_company",$data);
    }
}

//calling the method from the databaseHandler class to insert data into the database
$add_company = new add_company();
$add_company->insertDataIntoDatabase();
?>