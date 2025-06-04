<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM recipes WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $recipe = $result->fetch_assoc();
    } else {
        echo "Recipe not found!";
        exit();
    }
} else {
    echo "No recipe selected!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipe Details - M&D DELICIOUS</title>
  <link rel="stylesheet" href="m&d style.css" />
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

  <main>
    <div class="recipe-detail">
      <h2><?php echo htmlspecialchars($recipe['title']); ?></h2>
      <p><strong>Ingredients:</strong></p>
      <p><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
      <p><strong>Instructions:</strong></p>
      <p><?php echo nl2br(htmlspecialchars($recipe['instructions'])); ?></p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>
