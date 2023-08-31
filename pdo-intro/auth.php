<?php

//TODO: Validate form data
[
  'email' => $email,
  'password' => $password
] = $_POST;

require_once 'functions/db.php';

// Récupération d'une instance de PDO
try {
  $pdo = getDbConnection();
} catch (PDOException) {
  echo "Erreur de connexion à la base de données";
  exit;
}

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE email=:email");
$stmtUser->execute(['email' => $email]);

$user = $stmtUser->fetch();

if ($user === false) {
  echo "Utilisateur non trouvé";
  exit;
}

$userHash = $user['passwordHash'];

if (password_verify($password, $userHash)) {
  echo "Login ok";
} else {
  echo "Mot de passe incorrect";
}
