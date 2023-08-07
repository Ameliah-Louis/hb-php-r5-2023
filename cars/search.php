<?php
require_once 'data/cars.php';

// 0 - J'initialise un tableau de résultats (vide par défaut)
/** @var Car[] */
$results = [];
$search = "";
// 1 - je vérifie l'existence du paramètre de recherche
if (isset($_GET['search-year'])) {
  // 2 - Je l'extraie
  // $search = $_GET['search-year'];
  ['search-year' => $search] = $_GET;
  $search = intval($search);
  // 3 - On cherche l'année dans le tableau $cars
  foreach ($cars as $el) {
    // 4 - Pour chaque voiture :
    // Si l'année de la voiture correspond à l'année recherchée
    if ($el->getYear() === $search) {
      // 5 - Ajout de l'élément au tableau de résultats
      $results[] = $el;
    }
  }
}

// --- SOLUTION ALTERNATIVE ---
/** @var Car[] */
// $results = [];
// if (isset($_GET['search-year'])) {
//   $yearSearch = intval($_GET['search-year']);
//   $results = array_filter($cars, function (Car $c) use ($yearSearch) {
//     return $c->getYear() === $yearSearch;
//   });
// }
// ----------------------------

$title = "Résultats pour  : $search";
require_once 'layout/header.php';
?>

<h1>Résultats de recherche</h1>

<!-- Résultats -->
<?php foreach ($results as $res) { ?>
  <div class="item">
    <h2><?php echo $res->getName(); ?></h2>
    <h3><?php echo $res->getYear(); ?></h3>
  </div>
<?php } ?>

<?php require_once 'layout/footer.php';
