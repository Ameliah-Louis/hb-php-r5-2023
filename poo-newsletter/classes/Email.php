<?php

require_once __DIR__ . '/InvalidEmailException.php';

class Email
{
  private string $emailAddress;

  /**
   * @param string $emailAddress
   * @throws InvalidEmailException if email format is invalid
   */
  public function __construct(string $emailAddress)
  {
    if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL) === false) {
      throw new InvalidEmailException();
    }
    $this->emailAddress = $emailAddress;
  }

  public function getDomain(): string
  {
    $emailParts = explode('@', $this->emailAddress);
    return $emailParts[1];
  }

  public function getEmailAddress(): string
  {
    return $this->emailAddress;
  }
}
