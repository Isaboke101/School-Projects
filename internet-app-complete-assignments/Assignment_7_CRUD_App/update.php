<?php
require 'db.php';
$id = $_GET['id'];
$name = $_GET['name'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $newName = $_POST['name'];
  $stmt = $conn->prepare("UPDATE items SET name=? WHERE id=?");
  $stmt->bind_param("si", $newName, $id);
  $stmt->execute();
  header("Location: crud.html");
  exit();
}
?>
<form method="POST">
  <label>New Name: <input type="text" name="name" value="<?php echo $name; ?>" required /></label>
  <button type="submit">Update</button>
</form>
