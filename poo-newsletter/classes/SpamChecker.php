<?php

class SpamChecker
{
  /** @var string[] */
  private const SPAM_DOMAINS = ["test.com", "mailinator.com"];

  /**
   * Checks if given email is a spam
   *
   * @param string $email Email to verify
   * @return boolean true if email is spam, false otherwise
   * @throws InvalidArgumentException if email format is incorrect
   */
  public function isSpam(string $email): bool
  {
    // 0 - Vérifier le format de l'email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      throw new InvalidArgumentException("Le format de l'email est incorrect");
    }
    // 1 - Récupérer le domaine de l'email
    $emailParts = explode('@', $email);
    $domain = $emailParts[1];
    // 2 - Vérifier si ce domaine se trouve dans le tableau de spams
    // --- 1ère méthode
    // foreach (self::SPAM_DOMAINS as $spamDomain) {
    //   if ($domain === $spamDomain) {
    //     return true;
    //   }
    // }
    // return false;
    // --- 2de méthode
    return in_array($domain, self::SPAM_DOMAINS);
  }
}
