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
                        <input type="number" name="experience" placeholder="Enter the years of experience">
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
    </body>
</html>