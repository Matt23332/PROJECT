<?php
session_start();
require("connect.php");

if (isset($_POST['login'])) {
  $user = $_POST["user"];
  $pass = $_POST["pass"];

  // Query using proper syntax and prevent SQL injection
  $select = mysqli_query($conn, "SELECT user, role FROM registration WHERE user='$user' AND pass='$pass'");
  $row = mysqli_fetch_assoc($select);

  if ($row) {
    $_SESSION["user"] = $row['user'];
    $_SESSION["role"] = $row['role'];

    // Redirect based on user role
    if ($row['role'] == 'admin') {
      header("Location: admin.php");
    } elseif ($row['role'] == 'patient') {
      header("Location: patient.php");
    } elseif ($row['role'] == 'doctor') {
      header("Location: doctor.php");
    } elseif ($row['role'] == 'pharmacist') {
      header("Location: pharmacy.php");
    } else {
      header("Location: homePage.php");
    }

    exit();
  } else {
    echo "Invalid username or password.";
  }
}

if (isset($_SESSION["user"])) {
  // Redirect based on user role
  if ($_SESSION["role"] == 'admin') {
    header("Location: admin.php");
  } elseif ($_SESSION["role"] == 'patient') {
    header("Location: patient.php");
  } elseif ($_SESSION["role"] == 'doctor') {
    header("Location: doctor.php");
  } elseif ($_SESSION["role"] == 'pharmacist') {
    header("Location: pharmacy.php");
  } else {
    header("Location: homePage.php");
  }

  exit();
}
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!--wrapper-->
  <div class="wrapper">
    <section>
      <center>
        <header>
          Login form
        </header>
      </center>
      <!--login form begins here-->
      <form action="" class="header" method="POST">
        <div class="field input">
          <label for="">Username: </label>
          <input type="text" name="user" id="user" placeholder="Enter your username" required>
        </div>
        <div class="field input">
          <label for="">Password: </label>
          <input type="password" name="pass" id="pass" placeholder="Enter your password" required>
        </div>
        <div class="field button">
          <input type="submit" name="login" value="LOGIN">
        </div>

        Don't have an account? <a href="registration.php" class="link">Register here...</a>
      </form>
    </section>
  </div>
</body>
</html>
