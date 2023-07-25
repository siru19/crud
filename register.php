<?php

require 'db_connection.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $users = mysqli_query($conn, "SELECT * from users");

    while ($user = mysqli_fetch_assoc($users)) {
        if ($email == $user['email']) {
            echo json_encode("Email already exist");
            exit();
        }
    }


    $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo json_encode("Register Successfull");
    } else {
        echo json_encode("Error");
    }
} else {
    echo json_encode("Please fill up all the forms");
}