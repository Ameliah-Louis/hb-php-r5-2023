<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<h1>RECHERCHE</h1>

<?php var_dump($_GET); ?>

<form>
  <input type="text" placeholder="Recherche..." name="search" />
  <button type="submit">
    Rechercher
  </button>
</form>

<!-- RÉSULTATS -->
<?php
if (isset($_GET['search'])) {
  ['search' => $search] = $_GET;

  $results = array_filter($products, fn ($el) => str_contains($el['name'], $search));

  var_dump($results);
}
?>

<?php require_once 'layout/footer.php';
