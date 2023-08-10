<?php

abstract class User
{
  public function __construct(
    protected int $id = 1,
    protected string $name = "Johnny",
    protected string $password = "*****",
    protected string $email = "jajampak@cor.kw"
  ) {
  }

  abstract public function getIntroduction(): string;

  // public function getIntroduction(): string
  // {
  //   return "Bonjour ! Je suis " . $this->name;
  // }

  public function getId(): int
  {
    return $this->id;
  }
  public function setId(int $id): static
  {
    $this->id = $id;
    return $this;
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

  public function getPassword(): string
  {
    return $this->password;
  }
  public function setPassword(string $password): static
  {
    $this->password = $password;
    return $this;
  }

  public function getEmail(): string
  {
    return $this->email;
  }
  public function setEmail(string $email): static
  {
    $this->email = $email;
    return $this;
  }
}
