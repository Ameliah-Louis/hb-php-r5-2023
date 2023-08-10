<?php

class Product
{
  /** @var Service[] $services */
  private array $services = [];

  public function __construct(
    private string $name,
  ) {
  }

  public function getName()
  {
    return $this->name;
  }
  public function setName($name): self
  {
    $this->name = $name;
    return $this;
  }
}
