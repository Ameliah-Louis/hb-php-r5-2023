<?php
require_once 'classes/Car.php';
require_once 'data/cars.php';
require_once 'layout/header.php';

$years = [];

foreach ($cars as $car) {
  if (!in_array($car->getYear(), $years)) {
    $years[] = $car->getYear();
  }
}
sort($years);

// $years = array_unique(array_map(fn (Car $c) => $c->getYear(), $cars));
// sort($years);
?>

<h1>exo voiture et barre de recherche</h1>

<fieldset class="testsearch" style="display: flex;align-items: center;max-width: 20%;align-items:center;margin-left:220px;">
  <!-- search.php?search-year=XXXX -->
  <form action="search.php">
    <label for="search-year">Année :</label>
    <select name="search-year" id="search-year">
      <option value="">--- Année ---</option>
      <?php foreach ($years as $y) { ?>
        <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
      <?php } ?>
    </select>
    <input type="search" placeholder="recherche..." name="search" />
    <input type="submit" value="Rechercher" />
  </form>
</fieldset>

<?php require_once 'layout/footer.php';
