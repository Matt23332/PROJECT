<form method="GET" action="">
  <input type="text" name="name" placeholder="Enter patient name">
  <button type="submit" name="searchPatient">Search</button>
</form>

<?php
require("connect.php");

if (isset($_GET['searchPatient'])) {
  $name = $_GET['name'];

  // Perform the search query
  $query = "SELECT * FROM patient WHERE name = '$name'";
  $result = mysqli_query($conn, $query);

  // Display the search results and update form
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Display the record details
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Number: " . $row['number'] . "<br>";
    echo "Address: " . $row['address'] . "<br>";
    echo "Sickness: " . $row['sickness'] . "<br>";
    echo "Doctor Name: " . $row['doctor_name'] . "<br>";

    // Display the update form
    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '<input type="text" name="name" value="' . $row['name'] . '">';
    echo '<input type="text" name="number" value="' . $row['number'] . '">';
    echo '<input type="text" name="address" value="' . $row['address'] . '">';
    echo '<input type="text" name="sickness" value="' . $row['sickness'] . '">';
    echo '<input type="text" name="doctor_name" value="' . $row['doctor_name'] . '">';
    echo '<button type="submit" name="updatePatient">Update</button>';
    echo '</form>';
  } else {
    echo "No results found.";
  }
}

if (isset($_POST['updatePatient'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $sickness = $_POST['sickness'];
  $doctor_name = $_POST['doctor_name'];

  $updateQuery = "UPDATE patient SET name='$name', number='$number', address='$address', sickness='$sickness', doctor_name='$doctor_name' WHERE id='$id'";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    echo "Record updated successfully.";
    header("Location: CRUD.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<form method="GET" action="">
  <input type="text" name="doctor_name" placeholder="Enter doctor name">
  <button type="submit" name="searchDoctor">Search</button>
</form>

<?php

if (isset($_GET['searchDoctor'])) {
  $doctor_name = $_GET['doctor_name'];

  $query = "SELECT * FROM doctor WHERE doctor_name = '$doctor_name'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "ID: " . $row['id'] . "<br>";
    echo "Doctor name: " . $row['doctor_name'] . "<br>";
    echo "Specialty: " . $row['specialty'] . "<br>";
    echo "Experience: " . $row['experience'] . "<br>";

    echo '<form method="POST" action="">';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '<input type="text" name="doctor_name" value="' . $row['doctor_name'] . '">';
    echo '<input type="text" name="specialty" value="' . $row['specialty'] . '">';
    echo '<input type="text" name="experience" value="' . $row['experience'] . '">';
    echo '<button type="submit" name="updateDoctor">Update</button>';
    echo '</form>';
  } else {
    echo "No results found.";
  }
}

if (isset($_POST['updateDoctor'])) {
  $id = $_POST['id'];
  $doctor_name = $_POST['doctor_name'];
  $specialty = $_POST['specialty'];
  $experience = $_POST['experience'];

  $updateQuery = "UPDATE doctor SET doctor_name='$doctor_name', specialty='$specialty', experience='$experience' WHERE id='$id'";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    echo "Record has been updated successfully.";
    header("Location: CRUD.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>