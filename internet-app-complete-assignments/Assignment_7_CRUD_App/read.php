<?php
require 'db.php';
$result = $conn->query("SELECT * FROM items");
echo "<ul>";
while ($row = $result->fetch_assoc()) {
  echo "<li>{$row['name']} 
    <a href='update.php?id={$row['id']}&name={$row['name']}'>Edit</a> | 
    <a href='delete.php?id={$row['id']}'>Delete</a></li>";
}
echo "</ul>";
?>
