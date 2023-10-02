<?php
require ("databaseHandler.php");
include ("connect.php");

class add_drug {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost","root","","test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $drug_name = $_POST["drug_name"];
            $formula = $_POST["formula"];
            $price = $_POST["price"];
            $company_name = $_POST["company_name"];
            $manufacture_date = $_POST["manufacture_date"];
            $expiry_date = $_POST["expiry_date"];
            $quantity = $_POST["quantity"];
            
            $uploadDirectory = "images/";
            $targetFilePath = $uploadDirectory . basename($_FILES["drug_image"]["name"]);

            if (move_uploaded_file($_FILES["drug_image"]["tmp_name"], $targetFilePath)) {
                $insertQuery = "INSERT INTO drug(drug_name, formula, price, company_name, manufacture_date, expiry_date, quantity, drug_image) VALUES ('$drug_name', '$formula', $price, '$company_name', '$manufacture_date', '$expiry_date', $quantity, '$targetFilePath')";
                if (mysqli_query($conn, $insertQuery)) {
                    echo "Drug added successfully.";
                }else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "File upload failed.";
            }
        $data = array(
            "drug_name" => $drug_name,
            "formula" => $formula,
            "price" => $price,
            "company_name" => $company_name,
            "manufacture_date" => $manufacture_date,
            "expiry_date" => $expiry_date,
            "quantity" => $quantity
        );

        $database->insertData("drug",$data);
    }
    }
}
// calling the method from the databaseHandler class to insert the data
$add_drug = new add_drug();
$add_drug->insertDataIntoDatabase();

?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--wrapper-->
        <div class="wrapper">
            <section>
                <center>
                    <header>
                        Drug form
                    </header>
                </center>
                <!--drug form starts here-->
                <form action="add_drug.php" class="header" method="POST" enctype="multipart/form-data">
                    <div class="field input">
                        <label for="">Drug Name</label>
                        <input type="text" name="drug_name" placeholder="Enter the drug name">
                    </div>
                    <div class="field input">
                        <label for="">Formula</label>
                        <input type="text" name="formula" placeholder="Enter the drug formula">
                    </div>
                    <div class="field input">
                        <label for="">Price</label>
                        <input type="text" name="price" placeholder="Enter the drug price">
                    </div>
                    <div class="field input">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" placeholder="Enter the name of the company">
                    </div>
                    <div class="field input">
                        <label for="">Manufacture date</label>
                        <input type="date" name="manufacture_date" placeholder="Enter the date of manufacture">
                    </div>
                    <div class="field input">
                        <label for="">Expiry Date</label>
                        <input type="date" name="expiry_date" placeholder="Enter the expiry date">
                    </div>
                    <div class="field input">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" min="1" placeholder="Enter the quantity">
                    </div>
                    <div class="field input">
                        <label for="">Drug Image</label>
                        <input type="file" name="drug_image" accept=".jpeg, .jpg, .png" onchange="previewImage(this);">
                    </div>
                    <div class="field">
                        <img id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 100px; max-height: 100px;">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD DRUG">
                    </div>
                </form>
                <!--drug form ends here-->
            </section>
        </div>
        <!--wrapper-->
            <script>
                function previewImage(input) {
                    var preview = document.getElementById('image-preview');
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        };

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        preview.src = '#';
                        preview.style.display = 'none';
                    }
                }
        </script>
    </body>
</html>