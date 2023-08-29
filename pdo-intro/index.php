<?php

require_once 'functions/db.php';

try {
  $products = getProducts();
} catch (PDOException) {
  echo "Erreur lors de la récupération des produits";
  exit;
}
?>

<?php
require_once 'layout/header.php';
?>

<h1>Produits</h1>

<?php

foreach ($products as $product) {
  require 'templates/product.php';
}

require_once 'layout/footer.php';
