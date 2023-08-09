<?php

class Product
{
  public function __construct(
    protected string $name  = "Produit",
    protected float  $price = 12.34
  ) {
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): static
  {
    $this->name = $name;
    return $this;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): static
  {
    $this->price = $price;
    return $this;
  }
}
