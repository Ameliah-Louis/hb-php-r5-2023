<?php

require_once __DIR__ . '/IListItem.php';

class Service implements IListItem
{
  public function __construct(
    private int $id,
    private string $name
  ) {
  }

  public function getValue(): string
  {
    return $this->id;
  }

  public function getLabel(): string
  {
    return $this->name;
  }

  public function getId()
  {
    return $this->id;
  }
  public function setId($id): self
  {
    $this->id = $id;
    return $this;
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
