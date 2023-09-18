<?php
require("databaseHandler.php");

class add_doctor {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost", "root", "", "test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $doctor_name = $_POST["doctor_name"];
            $specialty = $_POST["specialty"];
            $experience = $_POST["experience"];
        

        $data = array(
            "doctor_name" => $doctor_name,
            "specialty" => $specialty,
            "experience" => $experience
        );

        $database->insertData("doctor", $data);
    }
    }
}

session_start();

// calling the method from the databaseHandler class
$add_doctor = new add_doctor();
$add_doctor->insertDataIntoDatabase();
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
                        Doctor Details 
                    </header>
                </center>
                <!--doctor details begins here-->
                <h2>WELCOME, <?php echo $_SESSION['user'];?></h2>

                <form action="add_doctor.php" class="header" method="post">
                    <div class="field input">
                        <label for="">Doctor's Name</label>
                        <input type="text" name="doctor_name" placeholder="Enter the doctor's name">
                    </div>
                    <div class="field input">
                        <label for="">Specialty</label>
                        <input type="text" name="specialty" placeholder="Enter the doctor's Specialty">
                    </div>
                    <div class="field input">
                        <label for="">Years of Experience</label>
                        <input type="number" name="experience" min="1" placeholder="Enter the years of experience">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD DOCTOR">
                    </div>

                    Click here to <a href="logout.php" class="link">logout</a>
                </form>
                <!--doctor details ends here-->
            </section>
        </div>

        <!--wrapper-->
        <script>
            function successful_registration() {
                setTimeout (function() {successful_registration()}, 1000);
                alert("User successfully registered.");
        }
        </script>
    </body>
</html>