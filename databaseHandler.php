<?php

class databaseHandler {
    private $servername;
    private $username;
    private $password;
    private $database;

    public function __construct($servername, $username, $password, $database)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function insertData ($table, $data) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($conn-> connect_error) {
            die("connection failed: " . $conn->connect_error);
        }

        $columns = implode(",", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($conn->query($sql) === TRUE) {
            echo "Connection successful. Data has been inserted successfully.";
            header("Location: login.php");
        } else {
            echo "Error inserting the data: " . $conn->error;
        }

        $conn->close();
    }

}
// Creating a new instance for entering the data into the database
/*
$database = new databaseHandler("localhost","root", "" ,"test");

$data = array (
    "id" =>"",
    "name" => "",
    "number" => "",
    "address" => "",
    "sickness" => ""
);

$database->insertData("",$data);
*/
?>