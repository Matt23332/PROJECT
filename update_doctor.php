<form method="GET" action="">
  <input type="text" name="doctor_name" placeholder="Enter doctor name">
  <button type="submit" name="searchDoctor">Search</button>
</form>

<?php

require("connect.php");

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