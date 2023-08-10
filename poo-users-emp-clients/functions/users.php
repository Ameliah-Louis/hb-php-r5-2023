<?php

/**
 * @return User[]
 */
function getUsers(): array
{
  // Je fais une requête SELECT dans une BDD
  // Puis avec les résultats je crée une collection d'utilisateurs (objets)
  return [
    new Customer(1, "Benson", "BtAhZIvrgxxWlycEWAYh", "be@zu.mm", 429498, true),
    new Employee(2, "Hudson", "POABhoorLxmrqJM", "ficgit@fub.gt", 472479),
    new Customer(3, "Nash", "NnupxEBatBc", "acugeh@pejcavrif.bd", 407620, false),
    new Customer(4, "Collins", "exIKqStWvOWTyCBm", "ko@so.tp", 475803, false),
    new Employee(5, "Richardson", "vPpbCcKRHyoDld", "ac@kocu.br", 489013)
  ];
}
