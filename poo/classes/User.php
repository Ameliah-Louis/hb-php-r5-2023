<?php

class User
{
  // Membre statique
  public  const  LEGAL_AGE = 18;

  // Propriétés
  private string $firstname;
  private string $lastname;
  private int    $age;

  public function hasLegalAge(): bool
  {
    // --- if-else
    // if ($this->age >= 18) {
    //   return true;
    // } else {
    //   return false;
    // }
    // --- ternaire
    // return $this->age >= 18 ? true : false;
    // --- Final
    return $this->age >= self::LEGAL_AGE;
  }

  public function getFullName(): string
  {
    return $this->firstname . " " . $this->lastname;
  }

  public function getIntroduction(): string
  {
    return "Bonjour, je suis " . $this->getFullName();
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function setFirstname(string $firstname): self
  {
    $this->firstname = $firstname;
    return $this;
  }

  public function getLastname(): string
  {
    return $this->lastname;
  }

  public function setLastname(string $lastname): self
  {
    if ($lastname === "") {
    }

    $this->lastname = $lastname;
    return $this;
  }

  public function getAge(): int
  {
    return $this->age;
  }

  public function setAge(int $age): self
  {
    $this->age = $age;
    return $this;
  }
}
