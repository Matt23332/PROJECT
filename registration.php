<?php

session_start();
require ("connect.php");
?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>

  <link rel="stylesheet" href="style.css">


</head>
<body>
  <!--wrapper-->
      <div class="wrapper">
        <section>
          <center>
            <header>
              Registration form
            </header>
          </center>
          <!-- registration form starts here-->
          <form action="add_user.php" class="header" method="post">
            <div class="field input">
              <label for="">Name</label>
              <input type="text" name="name" placeholder="Enter your name">
            </div>
            <div class="field input">
              <label for="">Role</label>
              <input type="text" name="role" placeholder="Enter your role">
            </div>
            <div class="field input">
              <label for="">Email Address</label>
              <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="field input">
              <label for="">Username</label>
              <input type="text" name="user" placeholder="Enter your username">
            </div>
            <div class="field input">
              <label for="">Password</label>
              <input type="password" name="pass" placeholder="Enter your password">
            </div>
            <div class="field input">
              <label for="">Confirm password</label>
              <input type="password" name="confirm_password" placeholder="Confirm your password">
            </div>
            <div class="field button">
              <button onclick="successful_registration()">REGISTER</button>
            </div>

              <a href="login.php" class="link">Login here...</a>
          </form>
          <!--registration form ends here-->
        </section>
      </div>
      <script>
        function successful_registration() {
          alert("User successfully registered.");
          setTimeout (function() {
            var successful_registration = document.querySelector(".field button");
            if (successful_registration) {
              successful_registration.style.display = "none";
            }
          }, 1000);
        }
      </script>
  <!--wrapper-->

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: login.php");
  }
  ?>

</body>
</html>