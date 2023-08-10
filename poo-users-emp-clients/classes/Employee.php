<?php

require_once __DIR__ . '/User.php';

class Employee extends User implements IFormattable, IListItem
{
  public function __construct(
    int $id,
    string $name,
    string $password,
    string $email,
    private int $empNumber
  ) {
    parent::__construct($id, $name, $password, $email);
  }

  public function getValue(): string
  {
    return $this->id;
  }

  public function getLabel(): string
  {
    return $this->name;
  }

  public function format(): string
  {
    return "Format employé";
  }

  public function getIntroduction(): string
  {
    $introduction = "Bonjour, je suis employé, je m'appelle " . $this->name .
      "<br />" .
      "Mon numéro est " .
      $this->empNumber;

    return $introduction;
  }

  public function getEmpNumber()
  {
    return $this->empNumber;
  }
  public function setEmpNumber($empNumber): self
  {
    $this->empNumber = $empNumber;
    return $this;
  }
}
