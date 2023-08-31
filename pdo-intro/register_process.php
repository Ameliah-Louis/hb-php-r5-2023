<?php

require_once 'functions/db.php';

// Récupération d'une instance de PDO
try {
  $pdo = getDbConnection();
} catch (PDOException) {
  echo "Erreur de connexion à la base de données";
  exit;
}

// Récupération des données de formulaire
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$birthDate = $_POST['birth_date'];
$password  = $_POST['password'];
$passwordConfirm  = $_POST['passwordConfirm'];

// Validation des données

// Préparation de la requête avec les paramètres adéquats
$stmtInsert = $pdo->prepare("INSERT INTO users(firstname, lastname, email, birth_date, passwordHash) VALUES (?, ?, ?, ?, ?)");

// Exécution de la requête
$stmtInsert->execute([
  $firstname,
  $lastname,
  $email,
  $birthDate,
  password_hash($password, PASSWORD_DEFAULT)
]);

echo "ok";
