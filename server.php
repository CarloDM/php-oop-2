<?php
include_once __DIR__ . "/class.php";

$test_product = new Product('amico cane',5, 'cane');
$test_product->brand = 'Purina';

$test_product2 = new Category('cane sazio',2, 'cane');
$test_product2->brand = 'Ultima';

$test_product3 = new Food('gatto snello', 5 , 'gatto', 'crocchette');
$test_product3->brand = 'Kitekat';

$test_product4 = new Game('pallina per cane', 1.5 , 'cane', 'pallina');
$test_product4->brand = 'Dog Best Friends';

var_dump($test_product);
var_dump($test_product2);
var_dump($test_product3 ,$test_product3::$type);

$my_products = [
  $test_product3,$test_product4
];

var_dump(property_exists($test_product4, 'Game'));

?>