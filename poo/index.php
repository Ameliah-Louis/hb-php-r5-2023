<?php
// Classe, instance, encapsulation, méthode, propriété, portée, constructeur, $this, exception, abstraction, classe abstraite, interface, polymorphisme

require_once 'classes/Product.php';

$product = new Product();
// $product->name = "Beurre";
// $product->setName("Beurre");
// $product->price = 2.23;
$product->setPrice(2.23);

var_dump($product);
