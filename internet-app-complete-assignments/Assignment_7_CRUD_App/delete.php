<?php
require 'db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM items WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: crud.html");
?>
