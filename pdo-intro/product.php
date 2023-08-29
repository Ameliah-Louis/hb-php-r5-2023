<?php

// http://localhost:45083/pdo-intro/product.php?id=1
// Injection SQL :
// http://localhost:45083/pdo-intro/product.php?id=1; DELETE FROM product;

require_once 'functions/db.php';

$id = $_GET['id'] ?? null;

if ($id === null) {
  echo "Merci de préciser un id";
  exit;
}

$pdo = getDbConnection(); // N'oubliez pas le try/catch

// Requête non préparée : vulnérable aux injections SQL ==> NON SÉCURISÉE
// $stmt = $pdo->query("SELECT * FROM product WHERE id=$id");
//
// Requête préparée (recommandée) :
// 1 - Je prépare une requête (avec des paramètres de requête)
$stmtProductItem = $pdo->prepare("SELECT * FROM product WHERE id=:id_product");
// 2 - J'exécute ma requête préparée, en lui fournissant
// À CE MOMENT-LÀ une valeur pour mon paramètre
$stmtProductItem->execute(['id_product' => $id]);

$product = $stmtProductItem->fetch(); // soit le produit, s'il est trouvé, soit false

if ($product === false) {
  http_response_code(404);
  echo "Not found";
  exit;
}

require_once 'layout/header.php';
?>

<h1><?php echo $product['name']; ?></h1>
<h2><?php echo $product['price']; ?> €</h2>

<?php require_once 'layout/footer.php';
