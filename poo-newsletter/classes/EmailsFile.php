<?php

class EmailsFile
{
  private const FILE_PATH = __DIR__ . '/../emails.txt';

  private array $emails;

  public function __construct(private SpamChecker $checker)
  {
    $this->emails = file(self::FILE_PATH, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  }

  public function add(Email $email): void
  {
    // Vérification doublon
    if (in_array($email->getEmailAddress(), $this->emails)) {
      throw new Exception("Cet email est déjà enregistré dans la newsletter");
    }
    // Vérification spam
    if ($this->checker->isSpam($email)) {
      throw new Exception("Cet email est un spam");
    }
    file_put_contents(self::FILE_PATH, $email->getEmailAddress() . PHP_EOL, FILE_APPEND);
    $this->emails[] = $email->getEmailAddress();
  }

  public function getEmails(): array
  {
    return $this->emails;
  }
}
