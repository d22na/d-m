<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = $conn->query("SELECT * FROM recipes WHERE id = $id");
  $recipe = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $ingredients = $_POST["ingredients"];
  $instructions = $_POST["instructions"];

  $sql = "UPDATE recipes SET title='$title', ingredients='$ingredients', instructions='$instructions' WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('✅ Recipe updated successfully!'); window.location='manage_recipes.php';</script>";
  } else {
    echo "<script>alert('❌ Error: " . $conn->error . "');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Recipe - M&D DELICIOUS</title>
  <link rel="stylesheet" href="m&d style.css" />
</head>
<body>
  <header>
    <h1>Edit Recipe</h1>
    <p>Update your recipe details below</p>
  </header>

  <nav>
    <a href="index.html">Home</a>
    <a href="submit_recipe.php">Submit Recipe</a>
    <a href="manage_recipes.php">Manage Recipes</a>
    <a href="contact_us.php">Contact us</a>
  </nav>

  <main class="form-container">
    <h2 style="text-align: center;">Update Recipe</h2>
    <form method="POST">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="<?= htmlspecialchars($recipe['title']) ?>" required>

      <label for="ingredients">Ingredients</label>
      <textarea name="ingredients" id="ingredients" required><?= htmlspecialchars($recipe['ingredients']) ?></textarea>

      <label for="instructions">Instructions</label>
      <textarea name="instructions" id="instructions" required><?= htmlspecialchars($recipe['instructions']) ?></textarea>

      <button type="submit">Update Recipe</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>

