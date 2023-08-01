<?php

function getRoundedByZeroFive(float $value): float
{
  // value : 5.36
  // intPart = 0
  // 1 -> 2 -> 3 -> 4 -> 5 -> 6 stop
  // 6 - 1 = 5
  for ($intPart = 0; $intPart < $value; $intPart++);
  $intPart--;

  $decimals = $value - $intPart;

  $result = match (true) {
    $decimals < 0.25 => $intPart,
    $decimals < 0.75 => $intPart + 0.5,
    default => $intPart + 1
  };

  return $result;
}

echo getRoundedByZeroFive(686.213) . "<br />";
echo getRoundedByZeroFive(34.042) . "<br />";
echo getRoundedByZeroFive(21.78) . "<br />";
echo getRoundedByZeroFive(0.25) . "<br />";
echo getRoundedByZeroFive(4.36) . "<br />";
echo getRoundedByZeroFive(5.75) . "<br />";
echo getRoundedByZeroFive(451.89) . "<br />";
echo getRoundedByZeroFive(1.5) . "<br />";
