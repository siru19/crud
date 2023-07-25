<?php
$host = "localhost";
$dbName = "crud";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password, $dbName);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;

    exit();
} else {

}
