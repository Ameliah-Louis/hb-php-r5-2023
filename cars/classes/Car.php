<?php

class Car
{
  private string $name;
  private string $engine;
  private int    $year;
  private int    $km;

  public function __construct(
    string $name,
    string $engine,
    int $year,
    int $km
  ) {
    $this->setName($name);
    $this->setEngine($engine);
    $this->setYear($year);
    $this->setKm($km);
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    if (!$name) {
      // Exception...
    }

    $this->name = $name;
    return $this;
  }

  public function getEngine(): string
  {
    return $this->engine;
  }

  public function setEngine(string $engine): self
  {
    $this->engine = $engine;
    return $this;
  }

  public function getYear(): int
  {
    return $this->year;
  }

  public function setYear(int $year): self
  {
    $this->year = $year;
    return $this;
  }

  public function getKm(): int
  {
    return $this->km;
  }

  public function setKm(int $km): self
  {
    $this->km = $km;
    return $this;
  }
}
