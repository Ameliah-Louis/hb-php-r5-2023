<?php

class ProductCirc extends Product
{
  private float $diameter;

  public function __construct(
    string $name,
    float $price,
    float $diameter
  ) {
    parent::__construct($name, $price);
    $this->diameter = $diameter;
  }

  public function displayInfos(int $flags = 0): void
  {
    parent::displayInfos();
    echo "<br />";
    echo "Coucou, je suis circulaire, mon prix est " . $this->price . " et mon diamètre est " . $this->diameter;
  }

  public function getDiameter(): float
  {
    return $this->diameter;
  }

  public function setDiameter(float $diameter): self
  {
    $this->diameter = $diameter;
    return $this;
  }
}
