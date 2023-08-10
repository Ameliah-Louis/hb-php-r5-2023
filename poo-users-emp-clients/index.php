<?php

require_once 'classes/User.php';
require_once 'classes/Employee.php';
require_once 'classes/Customer.php';

require_once 'functions/users.php';

// Impossible d'instancier un object d'une classe abstraite
// $user = new User();

// echo $user->getIntroduction();
echo "<br />";

$emp = new Employee(1, "Alexander", "clpYBBk", "vodto@cotroc.ng", 460184);

echo $emp->getIntroduction();
echo "<br />";

$client = new Customer(1, "Lane", "dcpkaUOJdp3UrXT", "durfi@kalfama.ua", 447596, false);

echo $client->getIntroduction() . "<br />";

$list = getUsers();

/**
 * Displays a list of users
 *
 * @param User[] $users
 * @return void
 */
function displayUsers(array $users): void
{
  foreach ($users as $user) {
    echo "---<br />";
    echo $user->getIntroduction() . "<br />";
    echo "---<br />";
  }
}

displayUsers($list);
