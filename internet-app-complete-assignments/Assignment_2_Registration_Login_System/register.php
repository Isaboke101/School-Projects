<?php
require 'db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);
if ($stmt->execute()) {
    echo "Registration successful. <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $stmt->error;
}
?>
