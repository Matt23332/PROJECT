<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Management System</title>

  <link rel="stylesheet" href="style.css">


</head>
<body>
  <!--wrapper-->
      <div class="wrapper">
        <section>
          <center>
            <header>
              Pharmacy General Information
            </header>
          </center>
          <!-- pharmacy general information form starts here-->
          <form action="add_pharmacy.php" class="header" method="post">
            <div class="field input">
              <label for="">Pharmacy name</label>
              <input type="text" name="name" placeholder="Enter the pharmacy name">
            </div>
            <div class="field input">
              <label for="">Pharmacy Address</label>
              <input type="text" name="address" placeholder="Enter the address">
            </div>
            <div class="field input">
              <label for="">Pharmacy number</label>
              <input type="text" name="number" placeholder="Enter the phone number">
            </div>
            <div class="field button">
              <input type="submit" name="submit" value="SUBMIT">
            </div>
            <div class="error-text"></div>
            
            Click here to <a href="logout.php" class="link">logout</a>

          </form>
          <!--pharmacy general information form ends here-->
        </section>
      </div>

  <!--wrapper-->
</body>
</html>