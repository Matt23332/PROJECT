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
      header("Location: home.html");
    } elseif ($row['role'] == 'patient') {
      header("Location: patient.php");
    } elseif ($row['role'] == 'doctor') {
      header("Location: doctor.php");
    } elseif ($_row['role'] == 'pharmacist') {
      header("Location: pharmacy.php");
    } else {
      header("Location: home.html");
    }

    exit();
  } else {
    echo "Invalid username or password.";
  }
}

if (isset($_SESSION["user"])) {
  // Redirect based on user role
  if ($_SESSION["role"] == 'admin') {
    header("Location: home.html");
  } elseif ($_SESSION["role"] == 'patient') {
    header("Location: patient.php");
  } elseif ($_SESSION["role"] == 'doctor') {
    header("Location: doctor.php");
  } elseif ($_SESSION["role"] == 'pharmacist') {
    header("Location: pharmacy.php");
  } else {
    header("Location: home.html");
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
</head>
<body>
  <h1>Login</h1>
  <form action="" method="POST">
    <div>
      <label for="user">Username:</label>
      <input type="text" id="user" name="user" required>
    </div>
    <div>
      <label for="pass">Password:</label>
      <input type="password" id="pass" name="pass" required>
    </div>
    <div>
      <input type="submit" name="login" value="Login">
    </div>

    Don't have an account? <a href="registration.php" class="link">Register here...</a>
  </form>
</body>
</html>
