<!-- dispense.php -->
<?php

require ("connect.php");

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $drug_name = $_POST['drug_name'];
    $quantity = $_POST['quantity'];
    $instructions = $_POST['instructions'];

    // Check if the patient and drug exist in the database
    $query = "SELECT * FROM patient WHERE name = '$name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Patient exists
        $query = "SELECT * FROM drug WHERE name = '$drug_name'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Drug exists
            // Update prescription status as dispensed
            $query = "UPDATE prescription SET status = 'dispensed' WHERE name = '$name' AND drug_name = '$drug_name'";
            mysqli_query($conn, $query);

            // Deduct dispensed quantity from drug inventory
            $query = "UPDATE drug SET quantity = quantity - $quantity WHERE name = '$drug_name'";
            mysqli_query($conn, $query);

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
        <label for="instructions">Additional Instructions:</label>
        <textarea name="instructions" id="instructions"></textarea><br>
        <input type="submit" value="Dispense">
    </form>
</body>
</html>
