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

<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--wrapper-->
        <div class="wrapper">
            <section>
                <center>
                    <header>
                        Patient form
                    </header>
                </center>
                <!--patient form starts here-->
                <h1>WELCOME, <?php echo $_SESSION['user']; ?></h1>

                <form action="" class="header" method="post">
                    <div class="field input">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="field input">
                        <label for="">Phone Number</label>
                        <input type="text" name="number" placeholder="Enter your phone number">
                    </div>
                    <div class="field input">
                        <label for="">Address</label>
                        <input type="text" name="address" placeholder="Enter your address">
                    </div>
                    <div class="field input">
                        <label for="">Sickness</label>
                        <input type="text" name="sickness" placeholder="Enter your sickness/symptoms">
                    </div>
                    <div class="field input">
                        <label for="">Doctor's Name</label>
                        <input type="text" name="doctor_name" placeholder="Enter your doctor's name">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD PATIENT">
                    </div>
                    <a class="update-btn" href="CRUD.php">UPDATE DETAILS</a>

                    Click here to <a href="logout.php" class="link">logout</a>
                </form>
                <!--patient form ends here-->
            </section>
        </div>

        <!--wrapper-->
    </body>
</html>