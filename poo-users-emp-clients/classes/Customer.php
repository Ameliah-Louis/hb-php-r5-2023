<?php

require_once __DIR__ . '/User.php';

class Customer extends User implements IFormattable
{
  public function __construct(
    int $id,
    string $name,
    string $password,
    string $email,
    private int $clientNumber,
    private bool $premium
  ) {
    parent::__construct($id, $name, $password, $email);
  }

  public function format(): string
  {
    return "Format client";
  }

  public function getIntroduction(): string
  {
    $introduction = "Bonjour, je suis client, je m'appelle " . $this->name .
      "<br />" .
      "Mon numéro est " .
      $this->clientNumber .
      ($this->premium ? " je suis premium" : " j'aimerais être premium");

    return $introduction;
  }

  public function getClientNumber()
  {
    return $this->clientNumber;
  }
  public function setClientNumber($clientNumber): self
  {
    $this->clientNumber = $clientNumber;
    return $this;
  }
}
