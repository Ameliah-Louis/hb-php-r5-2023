<?php

require_once __DIR__ . '/Email.php';

class SpamChecker
{
  /** @var string[] */
  private const SPAM_DOMAINS = ["test.com", "mailinator.com"];

  /**
   * Checks if given email is a spam
   *
   * @param Email $email Email to verify
   * @return boolean true if email is spam, false otherwise
   * @throws InvalidArgumentException if email format is incorrect
   */
  public function isSpam(Email $email): bool
  {
    return in_array($email->getDomain(), self::SPAM_DOMAINS);
  }
}
