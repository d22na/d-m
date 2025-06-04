<?php
include 'db.php';

$result = $conn->query("SELECT * FROM recipes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Recipes</title>
  <link rel="stylesheet" href="m&d style.css">
</head>
<body>
  <header>
    <h1>Manage Recipes</h1>
    <p>Update, Delete, and Manage Your Recipes</p>
    
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
    <table border="1" style="margin: 30px auto; width: 80%; text-align: left;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Ingredients</th>
          <th>Instructions</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= htmlspecialchars($row['title']) ?></td>
          <td><?= nl2br(htmlspecialchars($row['ingredients'])) ?></td>
          <td><?= nl2br(htmlspecialchars($row['instructions'])) ?></td>
          <td>
            <a href="edit_recipes.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_recipes.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this recipe?')">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>