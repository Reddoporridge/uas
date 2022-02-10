<?php
    $conn = new mysqli("172.19.0.2", "root", "root", "trucorp");
    $result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Users</title>
</head>
<body>
    <p>Number of Users : <?= $result->num_rows ?></p>
</body>
</html>
