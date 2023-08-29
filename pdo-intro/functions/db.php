<?php

/**
 * @throws PDOException if connection fails
 */
function getDbConnection(): PDO
{
  // DSN = Data Source Name
  $pdo = new PDO(
    "mysql:host=172.18.0.1;port=3640;dbname=hb-php-r5;charset=utf8mb4",
    'root',
    'mysqltests',
    [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
  return $pdo;
}

function getProducts(): array
{
  $pdo = getDbConnection();
  $stmt = $pdo->query("SELECT * FROM product");

  $products = $stmt->fetchAll();
  return $products;
  // Pour lire les résultats un par un (curseur)
  // while ($product = $stmt->fetch()) {
  //   var_dump($product);
  // }
}
