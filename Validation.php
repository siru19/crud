<?php

require 'db_connection.php';
if (isset($_GET['name'])) {

    $name = $_GET['name'];

    $users = mysqli_query($conn, "SELECT * FROM users inner join roles on users.roles_Id = roles.roles_Id where name like '%$name%'");

    echo json_encode(mysqli_fetch_all($users));
} else {
    echo json_encode("Error");
}
?>