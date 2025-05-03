<?php
$host = 'localhost';
$db = 'internet_app';
$user = 'root';
$pass = '';  // Use appropriate password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
