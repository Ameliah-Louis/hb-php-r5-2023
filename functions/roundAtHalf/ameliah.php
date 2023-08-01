<?php

function roundAtHalf(float $number): float
{
  // On multiplie par 2
  // Par exemple 0.25 -> 0.5
  // Une fois arrondi, va donner 1 (car >= 0.5)
  // Puis divisé par 2 donne 0.5
  // Autres exemples :
  // 0.23 --> 0.46 --> arrondi à 0 (car < 0.5) --> / 2 donne 0
  // 0.76 --> 1.52 --> arrondi à 2 (car >= 1.5) --> / 2 donne 1
  // ...
  $rounded = round($number * 2) / 2;

  return $rounded;
}

echo roundAtHalf(686.213) . "<br />";
echo roundAtHalf(34.042) . "<br />";
echo roundAtHalf(21.78) . "<br />";
echo roundAtHalf(0.25) . "<br />";
echo roundAtHalf(4.36) . "<br />";
echo roundAtHalf(5.75) . "<br />";
echo roundAtHalf(451.89) . "<br />";
echo roundAtHalf(1.5) . "<br />";
