<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('✅ Message sent successfully!'); window.location='index.html';</script>";
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
  <title>Contact Us - M&D DELICIOUS</title>
  <link rel="stylesheet" href="m&d style.css" />
</head>
<body>
  <header>
    <h1>M&D DELICIOUS</h1>
    <p>We'd Love to Hear From You</p>
  </header>

  <nav>
    <a href="index.html">Home</a>
    <a href="about_us.html">About Us</a>
    <a href="submit_recipe.php">Submit Recipe</a>
    <a href="recipes.php">View Recipes</a>
    <a href="manage_recipes.php">Manage Recipes</a>
    <a href="contact_us.php">Contact Us</a>
  </nav>

  <main class="form-container">
    <h2>Contact Us</h2>
    <form method="POST">
      <label for="name"> Name</label>
      <input type="text" name="name" id="name" placeholder="Enter your name" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" required>

      <label for="message">Your Message</label>
      <textarea name="message" id="message" placeholder="Write your message here..." required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2025 M&D DELICIOUS. All rights reserved.</p>
  </footer>
</body>
</html>
