<?php
$username = "root";
$localhost = "localhost";
$password = "";
$database = "userdata";

$conn = mysqli_connect($localhost, $username, $password, $database);

if (!$conn) {

    die("Error" . mysqli_connect_error());
}

return $conn;