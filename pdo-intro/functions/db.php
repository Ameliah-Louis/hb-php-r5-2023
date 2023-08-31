<?php

/**
 * @throws PDOException if connection fails
 */
function getDbConnection(): PDO
{
  $dbSettings = parse_ini_file(__DIR__ . '/../db.ini');
  // $host = $dbSettings['DB_HOST'];
  [
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $dbname,
    'DB_CHARSET' => $charset,
    'DB_USER' => $user,
    'DB_PASSWORD' => $password
  ] = $dbSettings;

  // DSN = Data Source Name
  $pdo = new PDO(
    "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset",
    $user,
    $password,
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
