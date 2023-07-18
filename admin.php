<?php
session_start()

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav>
            <div class="menu-title">
            </div>
            <div class="menu-bar">
                <ul>
                    <li class=""><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li><a href="#">Patient</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="add_patient.php">Add Patient</a></li>
                                <li><a href="view_prescription.php">Check Prescription</a></li>
                                <li><a href="view_patient.php">View details</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Doctor</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="add_doctor.php">Add Doctor</a></li>
                                <li><a href="add_prescription.php">Write prescription</a></li>
                                <li><a href="view_doctor.php">View doctor details</a></li>
                                <li><a href="view_patient.php">View patient details</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Pharmacy</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="add_drug.php">Add drug</a></li>
                                <li><a href="view_drug.php">View drugs</a></li>
                                <li><a href="view_prescription.php">View prescriptions</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <h6>WELCOME, <?php echo $_SESSION['user']; ?> </h6>
                <a class="logout_button" href="logout.php">LOGOUT</a></li>
            </div>
        </nav>
    </body>
</html>