<!-- dispense.php -->
<?php

require ("connect.php");

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $drug_name = $_POST['drug_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    
    // Check if the patient and drug exist in the database
    $query = "SELECT * FROM patient WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Patient exists
        $query = "SELECT * FROM drug WHERE drug_name = '$drug_name'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Drug exists
            // Update prescription status as dispensed
            /*
            $query = "UPDATE prescription SET status = 'dispensed' WHERE name = '$name' AND drug_name = '$drug_name'";
            mysqli_query($conn, $query);
            */

            // Deduct dispensed quantity from drug inventory
            $query = "UPDATE drug SET quantity = quantity - $quantity WHERE drug_name = '$drug_name'";
            $insertQuery = "INSERT INTO dispense (name, drug_name, quantity, price, status) VALUES ('$name','$drug_name','$quantity','$price','$status')";
            mysqli_query($conn, $query);
            mysqli_query($conn, $insertQuery);

            // Display success message
            echo "Drug dispensed successfully!";
        } else {
            echo "Drug not found.";
        }
    } else {
        echo "Patient not found.";
    }
}

// Close the database connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Drug Dispensing</title>
</head>
<body>
    <h2>Drug Dispensing</h2>
    <form action="dispense.php" method="POST">
        <label for="patient_id">Patient Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="drug_name">Drug Name:</label>
        <input type="text" name="drug_name" id="drug_name" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" required><br>
        <label for="status">Status:</label>
        <input type="text" name="status" id="status"><br>
        <input type="submit" value="Dispense">
    </form>
</body>
</html>
