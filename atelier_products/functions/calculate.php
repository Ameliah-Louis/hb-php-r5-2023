<?php

/**
 * Calculates price with taxes for the given price and given tax
 *
 * @param float $price base price (without tax)
 * @param float $vat tax rate (e.g. 20% -> 1.2)
 * @return float Full tax price
 */
function getTotalPrice(float $price, float $vat): float
{
  if ($vat < 1) {
    echo "Tax rate must be greater than 1";
    exit;
  }

  return $price * $vat;
}
