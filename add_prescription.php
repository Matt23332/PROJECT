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
}

session_start();


//calling the method from the databaseHandler class to insert the data
$add_prescription = new add_prescription();
$add_prescription->insertDataIntoDatabase();

?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--wrapper-->
        <div class="wrapper">
            <section>
                <center>
                    <header>
                        Prescription form
                    </header>
                </center>
                <!--PRESCRIPTION FORM STARTS HERE-->
                <form action="add_prescription.php" class="header" method="POST">
                    <div class="field input">
                        <label for="">Patient Name</label>
                        <input type="text" name="name" placeholder="Enter the patient's name">
                    </div>
                    <div class="field input">
                        <label for="">Date of issue</label>
                        <input type="date" name="date" placeholder="Enter the date">
                    </div>
                    <div class="field input">
                        <label for="">Drug name</label>
                        <input type="text" name="drug_name" placeholder="Enter the name of the drug">
                    </div>
                    <div class="field input">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" placeholder="Enter the quantity">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD PRESCRIPTION">
                    </div>
                </form>
                <!--PRESCRIPTION FORM ENDS HERE-->
            </section>
        </div>
        <!--wrapper-->
    </body>
</html>