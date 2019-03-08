<?php

use Classes\Product;


require_once ('autoloader.php');

$product1 = new Product();
$product1->name = 'HAmac';

$product2 = clone $product1 ;
$product1->name = 'Parasol';

echo $product2->name;

// clone -> par copie -> copie a l'instante






?>