<?php
require 'db_connection.php';
$sql = "SELECT * from users";
//  echo json_encode( $conn->query($sql));
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result);
echo json_encode($users);


?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" style="width:100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>

        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td>
                    <?php echo $user[0] ?>

                </td>
                <td>
                    <?php echo $user[1] ?>
                </td>
                <td>
                    <?php echo $user[2] ?>
                </td>
                <td>
                    <?php echo $user[3] ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html> -->