<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="">
        <title>Home Page</title>
    </head>
    <body>
        <h1>WELCOME,<?php echo $_SESSION['user'];?></h1>
        Click here to <a href="logout.php">logout</a>
    </body>
</html>