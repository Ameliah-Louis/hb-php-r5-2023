<?php

function insertIntoArray(
  array $tab,
  int|string $element,
  int $index,
  ?int $fill = null
): array {
  if ($index > count($tab)) {
    $paddedTab = array_pad($tab, $index, $fill);
    $paddedTab[$index] = $element;
    return $paddedTab;
  } else {
    array_splice($tab, $index, 0, $element);
    return $tab;
  }
}

$tab = [1, 2, 3];
echo "<h2>Tableau original</h2>";
var_dump($tab);

$tabWithNewValue = insertIntoArray($tab, 4, 2);
echo "<h2>Tableau avec nouvelle valeur</h2>";
var_dump($tabWithNewValue);

$tabOuterBounds = insertIntoArray($tab, 18, 7);
echo "<h2>Tableau nouvelle valeur en-dehors des limites</h2>";
var_dump($tabOuterBounds);
