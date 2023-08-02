<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<!-- CONTENU -->
<h1>Fiche produit</h1>

<?php
// Vérification d'erreur
// Pour pouvoir interrompre le script au plus tôt
if (!isset($_GET['id'])) {
  http_response_code(400);
  echo "L'id est requis dans l'URL";
  exit;
}

$urlId = intval($_GET['id']);

if ($urlId === 0) {
  http_response_code(400);
  echo "L'id est incorrect";
  exit;
}
// $urlId = $_GET['id'] ?? null;
// $urlId = array_key_exists('id', $_GET) ? $_GET['id'] : null;

// J'isole les ID des produits dans un tableau
// Ce tableau est donc indexé de la même façon que l'original
// Les ID sont positionnés dans $productsIds comme les produits dans $products
$productsIds = array_column($products, 'id');
// Je cherche donc la position du produit dont l'ID m'a été passé dans l'URL
$productKey = array_search($urlId, $productsIds);

// Clé non trouvée => array_search renvoie false
if ($productKey === false) {
  http_response_code(404);
  echo "Produit non trouvé";
  exit;
}

// On est comme dans le dernier "else" d'une chaîne de if :
// Si on arrive là, c'est qu'on a évacué tous les scénarios d'erreur
// qu'on avait prévus.
// Donc notre produit existe, et on peut l'afficher.
var_dump($products[$productKey]);

// foreach ($products as $el) {
//   if ($el['id'] === $urlId) {
//     var_dump($el);
//     exit;
//   }
//   // $el['id'] == $urlId && $product = $el;
// }


// if (!isset($product)) {
//   echo "Aucun produit correspondant";
// } else {
//   var_dump($product);
// }

?>

<?php require_once 'layout/footer.php';
