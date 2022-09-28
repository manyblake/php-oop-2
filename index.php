<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccessory.php';
include_once __DIR__ . '/app/Cart.php';


$name = 'Crocchette';
$price = 69.99;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 100;
$expirationDate = '12/12/2024';
$ingredients = 'Lorem ipsum dolor sit amet';

$crocchette = new PetFood($name, $price, $description, $volume, $expirationDate, $ingredients);

$name = 'Carne in scatola';
$price = 3.99;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 10;
$expirationDate = '15/11/2022';
$ingredients = 'Lorem ipsum dolor sit amet';

$carne = new PetFood($name, $price, $description, $volume, $expirationDate, $ingredients);

$name = 'Osso di Gomma';
$price = 5.00;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 2;
$materials = 'Gomma';
$target = 'Cani';

$osso = new PetToy($name, $price, $description, $volume, $materials, $target);

$name = 'Cannetta con Piuma';
$price = 5.00;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 0.5;
$materials = 'Plastica, Piume';
$target = 'Gatti';

$cannetta = new PetToy($name, $price, $description, $volume, $materials, $target);

$name = 'Cuscino Cuccia';
$price = 19.99;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 25;
$size = 'L';
$category = 'Cucce, lettini e cuscini';

$cuscino = new PetAccessory($name, $price, $description, $volume, $size, $category);

$name = 'Pettorina';
$price = 14.99;
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$volume = 5;
$size = 'M';
$category = 'Pettorine, guinzagli & co.';

$pettorina = new PetAccessory($name, $price, $description, $volume, $size, $category);

$data = [$cannetta, $cuscino, $pettorina, $crocchette];

$data = $crocchette->addToCart($data, $crocchette);
$order = new Cart($data);

$order->calculateTotal($data);

$order->calculateShippingFees($data);

// var_dump($order->getShippingFees());

var_dump($order->getTotal($order));

// var_dump($data);
