<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM recipes WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Recipe deleted'); window.location='manage_recipes.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
