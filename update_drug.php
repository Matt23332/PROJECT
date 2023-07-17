<form method="GET" action="">
  <input type="text" name="name" placeholder="Enter drug name">
  <button type="submit" name="searchDrug">Search</button>
</form>

<?php
require("connect.php");

if (isset($_GET['searchDrug'])) {
  $name = $_GET['name'];

  // Perform the search query
  $query = "SELECT * FROM drug WHERE name = '$name'";
  $result = mysqli_query($conn, $query);

  // Display the search results and update form
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Display the record details
    echo "Name: " . $row['name'] . "<br>";
    echo "Formula: " . $row['formula'] . "<br>";
    echo "Price: " . $row['price'] . "<br>";
    echo "Company Name: " . $row['company_name'] . "<br>";
    echo "Manufacture date: " . $row['manufacture_date'] . "<br>";
    echo "Expiry date: " . $row['expiry_date'] . "<br>";
    echo "Quantity: " . $row['quantity'] . "<br>";


    // Display the update form
    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="original_name" value="' .$row['name'] . '">';
    echo '<input type="text" name="name" value="' . $row['name'] . '">';
    echo '<input type="text" name="formula" value="' . $row['formula'] . '">';
    echo '<input type="text" name="price" value="' . $row['price'] . '">';
    echo '<input type="text" name="company_name" value="' . $row['company_name'] . '">';
    echo '<input type="text" name="manufacture_date" value="' . $row['manufacture_date'] . '">';
    echo '<input type="text" name="expiry_date" value="' . $row['expiry_date'] . '">';
    echo '<input type="text" name="quantity" value="' . $row['quantity'] . '">';

    echo '<button type="submit" name="updateDrug">Update</button>';
    echo '</form>';
  } else {
    echo "No results found.";
  }
}

if (isset($_POST['updateDrug'])) {
    $original_name = $_POST['original_name'];
  $name = $_POST['name'];
  $formula = $_POST['formula'];
  $price = $_POST['price'];
  $company_name = $_POST['company_name'];
  $manufacture_date = $_POST['manufacture_date'];
  $expiry_date = $_POST['expiry_date'];
  $quantity = $_POST['quantity'];

  $updateQuery = "UPDATE drug SET name='$name', formula='$formula', price='$price', company_name='$company_name', manufacture_date='$manufacture_date', expiry_date='$expiry_date', quantity='$quantity' WHERE name='$original_name'";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    echo "Record updated successfully.";
    header("Location: pharmacy.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

