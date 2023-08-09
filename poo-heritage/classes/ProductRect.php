<?php

class ProductRect extends Product
{
  public function __construct(
    string $name,
    float $price,
    private float $width = 54.2,
    private float $height = 87.6
  ) {
    parent::__construct($name, $price);
  }

  public function displayInfos(): void
  {
    echo "Coucou, je suis rectangulaire, mon prix est " . $this->price . " et ma largeur est " . $this->width;
  }

  public function getWidth(): float
  {
    return $this->width;
  }

  public function setWidth(float $width): self
  {
    $this->width = $width;
    return $this;
  }

  public function getHeight(): float
  {
    return $this->height;
  }

  public function setHeight(float $height): self
  {
    $this->height = $height;
    return $this;
  }
}
