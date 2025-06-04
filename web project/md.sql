CREATE DATABASE IF NOT EXISTS cooking_db;
USE cooking_db;

-- Table 1 FOR Recipes
CREATE TABLE IF NOT EXISTS recipes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  ingredients TEXT NOT NULL,
  instructions TEXT NOT NULL
);

-- Table 2 FOR CONTACT US
CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT NOT NULL
);
