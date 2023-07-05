<?php
require ("databaseHandler.php");

class add_user {
    public function insertDataIntoDatabase() {
        $database = new databaseHandler("localhost", "root", "", "test");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $role = $_POST["role"];
            $email = $_POST["email"];
            $user = $_POST["user"];
            $pass = $_POST["pass"];
        }

        $data = array(
            "id" => "",
            "name" => $name,
            "role" => $role,
            "email" => $email,
            "user" => $user,
            "pass" => $pass
        );

        $database->insertdata("registration", $data);

    }
}
//calling the method from the databaseHandler class to insert the data
$add_user = new add_user();
$add_user->insertDataIntoDatabase();
?>