<?php
// Démarre une nouvelle session ou récupère une session existante
session_start();

if (!isset($_SESSION['pageView'])) {
  $_SESSION['pageView'] = 1;
} else {
  $_SESSION['pageView']++;
}

var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav>
    <ul>
      <li>
        <a href="index.php">Page d'accueil</a>
      </li>
      <li>
        <a href="test.php">Page de test</a>
      </li>
    </ul>
  </nav>