<?php

include ("connect.php");

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM patient WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result) {
        header("Location: CRUD.php");
    } else {
        echo "Error deleting the record.";
    }
    // REMEMBER TO ADD THE DELETE QUERY FOR THE DOCTOR AND PHARMACY CLASSES
}

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM doctor WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: CRUD.php");
    } else {
        echo "Error deleting the record.";
    }
}
?>