<?php
$conn = new mysqli("172.19.0.2", "root", "root", "trucorp");
$result = $conn->query("SELECT * FROM users");
echo $result->num_rows
?>
