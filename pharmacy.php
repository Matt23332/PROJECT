<?php

session_start()

?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Management System</title>

  <link rel="stylesheet" href="home.css">


</head>
<body>
  <header>
    <nav>
      <h6>WELCOME, <?php echo $_SESSION['user']; ?> </h6>

      <ul>
        <div>
          <li><a href="homePage.php">Home</a></li>
        </div>
        <div>
          <li><a href="add_drug.php">Add drug</a></li>
        </div>
        <div>
          <li><a href="view_drug.php">View drug</a></li>
        </div>
        <div>
          <li><a href="view_prescription.php">View prescription</a></li>
        </div>
      </ul>
    </nav>
    <a class="logout-btn" href="logout.php">Logout</a>
  </header>
  <div class="image"></div>  
</body>
</html>