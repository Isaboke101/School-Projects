<?php
require 'db.php';
$name = $_POST['name'];
$stmt = $conn->prepare("INSERT INTO items (name) VALUES (?)");
$stmt->bind_param("s", $name);
$stmt->execute();
header("Location: crud.html");
?>
