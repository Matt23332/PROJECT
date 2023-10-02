<?php

require ("connect.php");

$query = "SELECT * FROM drug";
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
  <style>
    .drug {
        border: 1px solid;
        padding: 10px;
        margin: 10px;
    }
    .drug img {
        max-width: 200px;
        max-height: 200px;
    }
  </style>
    </head>
    <body>
        <div class="container">
        <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Drug details</h2>
                            <button class="btn btn-primary my-5"><a href="update_drug.php" class="text-light">Update Details</a></button>
                        </div>
                        <div class="card-body">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="drug">
                                <h3><?php echo $row['drug_name']; ?></h3>
                                <p><strong>Formula:</strong> <?php echo $row['formula']; ?></p>
                                <p><strong>Price:</strong> <?php echo $row['price']; ?></p>
                                <p><strong>Company Name:</strong> <?php echo $row['company_name']; ?></p>
                                <p><strong>Manufacture Date:</strong> <?php echo $row['manufacture_date']; ?></p>
                                <p><strong>Expiry Date:</strong> <?php echo $row['expiry_date']; ?></p>
                                <p><strong>Quantity:</strong> <?php echo $row['quantity']; ?></p>
                                <img src="<?php echo $row['drug_image']; ?>" alt="<?php echo $row['drug_name']; ?>">
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>