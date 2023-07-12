<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <header>
            <nav>
            <h6>WELCOME, <?php echo $_SESSION['user']; ?> </h6>

                <ul>
                    <div>
                        <li><a href="homePage.html">Home</a></li>
                    </div>
                    <div>
                        <li><a href="add_patient.php">Register Patient</a></li>
                    </div>
                    <div>
                        <li><a href="update.php">Update details</a></li>
                    </div>
                    <div>
                        <li><a href="CRUD.php" target="_self">View details</a></li>
                    </div>
                </ul>
            </nav>
            <a class="logout-btn" href="logout.php">Logout</a> 

        </header>
        <div class="image">
        </div>
    </body>
</html>