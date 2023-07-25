<?php

require 'db_connection.php';


$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$sql = "SELECT * from users";

$result = mysqli_query($conn, $sql);

// echo json_encode($users);
while ($user = mysqli_fetch_assoc($result)) {
    // echo json_encode($user);
    if ($user['email'] == $email && $password == $user['password']) {
        $response = [
            'status' => 'success',
            'message' => 'Login Successfull',
            'data' => $user,
        ];
        echo json_encode($response);
        exit();
    }
}

$response = [
    'status' => 'error',
    'message' => 'Invalid Credentials',
];
echo json_encode($response);