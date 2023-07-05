<?php

require ("connect.php");
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["id"] ."</td><td>". $row["name"] ."</td><td>" .$row["number"] ."</td><td>" .$row["address"] ."</td><td>" .$row["sickness"] ."</td><td>" .$row["doctor_name"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();


?>