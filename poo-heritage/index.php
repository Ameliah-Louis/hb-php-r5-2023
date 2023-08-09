<?php

require_once 'classes/Product.php';
require_once 'classes/ProductRect.php';

$product = new Product();

// Interface fluide / Fluent interface
$product
  ->setName("Test")
  ->setPrice(456.7);

var_dump($product);

$productRect = new ProductRect(
  "Produit rectangulaire",
  87
);

$productRect
  ->setPrice(10)
  ->setWidth(458);

var_dump($productRect);

$productRect->displayInfos();
