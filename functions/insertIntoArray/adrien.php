<?php

function insertArrayElement(
  array $originalArray,
  string|int $element,
  int $index,
  ?int $fill = 0
): array {
  if ($index < count($originalArray)) {
    // Isole le début du tableau jusqu'à l'index demandé (exclu)
    $arrayStart = array_slice($originalArray, 0, $index);
    // Isole la fin du tableau à partir de l'index (inclus), et jusqu'à la fin
    // Jusqu'à la fin car aucune longueur (3ème argument) n'a été indiquée
    $arrayEnd   = array_slice($originalArray, $index);
    return [...$arrayStart, $element, ...$arrayEnd];
  }

  $numVoidElement = $index - count($originalArray);
  $arrayModif = $originalArray; // copie
  for ($i = 0; $i < $numVoidElement; $i++) {
    $arrayModif[] = $fill; // valeur par défaut
  }
  $arrayModif[] = $element;
  return $arrayModif;
}

$tab = [1, 2, 3, 4, 5];
echo "<h2>Tableau original</h2>";
var_dump($tab);

$tabWithNewValue = insertArrayElement($tab, 18, 3);
echo "<h2>Tableau avec nouvelle valeur</h2>";
var_dump($tabWithNewValue);

$tabOuterBounds = insertArrayElement($tab, 18, 8, null);
echo "<h2>Tableau nouvelle valeur en-dehors des limites</h2>";
var_dump($tabOuterBounds);
