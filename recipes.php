<?php
include 'db.php';

$result = $conn->query("SELECT * FROM recipes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Recipes - M&D DELICIOUS</title>
  <link rel="stylesheet" href="m&d style.css" />
</head>
<body>
  <header>
    <h1>M&D DELICIOUS</h1>
    <p>Explore Recipes from Around the World</p>
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
    <h2 style="text-align: center; margin-top: 30px;">All Recipes</h2>
    <div class="recipe-grid">
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="card">
          <h3><a href="view_recipe.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a></h3>
          <p><strong>Ingredients:</strong><br><?= nl2br(htmlspecialchars($row['ingredients'])) ?></p>
          <p><strong>Instructions:</strong><br><?= nl2br(htmlspecialchars($row['instructions'])) ?></p>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>
