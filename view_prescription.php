<?php

require ("connect.php");

$query = "SELECT * FROM prescription";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>CRUD Operations</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Prescription details</h2>
                        </div>
                        <div class="card-body">
                        <table border="1" cellpadding="5" id="data table">
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>drug_name</td>
                                    <td>date</td>
                                    <td>quantity</td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['drug_name'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['quantity'];?></td>
                                        <td><a href="delete.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>