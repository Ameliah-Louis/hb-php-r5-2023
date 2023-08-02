<?php
class Product
{
  // Structure - Propriétés
  private string $name;
  private float $price;

  // Capacités - Méthodes
  public function getFullPrice(float $taxRate): float
  {
    return $this->price * $taxRate;
  }

  public function getName(): string
  {
    return strtoupper($this->name);
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): void
  {
    if ($price < 0) {
      // Exception
    }

    $this->price = $price;
  }
}
