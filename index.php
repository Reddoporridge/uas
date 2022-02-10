<?php
    $db = new mysqli("172.19.0.2", "root", "root", "trucorp");
    $result = $db->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Server Admin</title>
</head>
<body>

    <?php while ($data = $result->fetch_assoc()) :?>
        <p>ID : <?= $data['ID']  ?></p>
        <p>Nama : <?= $data['Nama']  ?></p>
        <p>Alamat : <?= $data['Alamat']  ?></p>
        <p>Jabatan : <?= $data['Jabatan']  ?></p>
        <hr>
    <?php endwhile; ?>
</body>
</html>
