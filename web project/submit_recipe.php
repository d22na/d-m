<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $ingredients = $_POST["ingredients"];
  $instructions = $_POST["instructions"];

  $sql = "INSERT INTO recipes (title, ingredients, instructions) 
          VALUES ('$title', '$ingredients', '$instructions')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('🎉 Recipe submitted successfully!');</script>";
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
  <title>Submit a Recipe - M&D DELICIOUS</title>
  <link rel="stylesheet" href="m&d style.css" />
  <script defer src="script.js"></script>
</head>
<body>
  <header>
    <h1>M&D DELICIOUS</h1>
    <p>Your Go-To Place for Exploring Worldwide Recipes</p>
  </header>

  <nav>
    <a href="index.html">Home</a>
    <a href="about_us.html">About us</a>
    <a href="submit_recipe.php">Submit Recipe</a>
    <a href="recipes.php">View Recipes</a>
    <a href="manage_recipes.php">Manage Recipes</a>
    <a href="contact_us.php">Contact us</a>
  </nav>

  <main class="form container">
    <h2 style="text-align: center;">Submit a New Recipe</h2>
    <form method="POST" id="recipeForm">
      <label for="title">Recipe Title</label>
      <input type="text" name="title" id="title" placeholder="e.g. Chicken Biryani" required>

      <label for="ingredients">Ingredients</label>
      <textarea name="ingredients" id="ingredients" placeholder="List the ingredients..." required></textarea>

      <label for="instructions">Instructions</label>
      <textarea name="instructions" id="instructions" placeholder="Write step-by-step instructions..." required></textarea>

      <button type="submit">Submit Recipe</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>

