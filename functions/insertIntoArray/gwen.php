<?php

function insertValueTab(array $tab, string|int $value, int $index): array
{
  $newTab = [];
  $length = count($tab);

  if ($length < $index) {
    // echo "Erreur l'index est supérieur a la longueur du tableau";
    // Ici, $newTab est une copie de $tab et non une référence directe
    $newTab = $tab;
    for ($j = $length; $j < $index; $j++) {
      $newTab[$j] = 0;
    }
    $newTab[$index] = $value;
    return $newTab;
  }

  for ($i = 0; $i < $length; $i++) {
    if ($i === $index) {
      $newTab[$i] = $value;
    }
    $newTab[] = $tab[$i];
  }
  return $newTab;
}

$tab = [1, 2, 3];
echo "<h2>Tableau original</h2>";
var_dump($tab);

$tabWithNewValue = insertValueTab($tab, 4, 2);
echo "<h2>Tableau avec nouvelle valeur</h2>";
var_dump($tabWithNewValue);
echo "<h2>Tableau original après insertion nouvelle valeur</h2>";
var_dump($tab);

$tabOuterBounds = insertValueTab($tab, 18, 7);
echo "<h2>Tableau nouvelle valeur en-dehors des limites</h2>";
var_dump($tabOuterBounds);
echo "<h2>Tableau original nouvelle valeur en-dehors des limites</h2>";
var_dump($tab);
