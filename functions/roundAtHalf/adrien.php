<?php

function roundZeroFive(float $num): float
{
  // Récupère la valeur entière
  $numInt   = intval($num);
  // Isole la partie décimale
  $decimals = $num - $numInt;

  $result = match (true) {
    $decimals < 0.25 => $numInt,
    $decimals < 0.75 => $numInt + 0.5,
    default => $numInt + 1
  };

  return $result;

  // if ($decimals < 0.25) {
  //   // On retourne la partie entière
  //   return $numInt;
  // }
  // if ($decimals < 0.75) {
  //   // partie entière + 0.5
  //   return $numInt + 0.5;
  // }

  // return $numInt + 1;
}

echo roundZeroFive(686.213) . "<br />";
echo roundZeroFive(34.042) . "<br />";
echo roundZeroFive(21.78) . "<br />";
echo roundZeroFive(0.25) . "<br />";
echo roundZeroFive(4.36) . "<br />";
echo roundZeroFive(5.75) . "<br />";
echo roundZeroFive(451.89) . "<br />";
echo roundZeroFive(1.5) . "<br />";
