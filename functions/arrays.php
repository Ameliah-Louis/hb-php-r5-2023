<?php

// Passage par valeur = copie des paramètres en mémoire
function push(array $collection, int $element): void
{
  $collection[] = $element;
  // var_dump($collection);
}

// Passage par référence = modification directe sur l'élément passé en paramètre
function pushRef(array &$collection, int $element): void
{
  $collection[] = $element;
  // var_dump($collection);
}

$tab = [1, 2, 3];

push($tab, 6);
var_dump($tab);

pushRef($tab, 7);
var_dump($tab);
