<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccessory.php';


$name = 'Crocchette';
$price = '69.99';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$expirationDate = '12/12/2024';
$ingredients = 'Lorem ipsum dolor sit amet';

$crocchette = new PetFood($name, $price, $description, $expirationDate, $ingredients);

$name = 'Carne in scatola';
$price = '3.99';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$expirationDate = '15/11/2022';
$ingredients = 'Lorem ipsum dolor sit amet';

$carne = new PetFood($name, $price, $description, $expirationDate, $ingredients);

$name = 'Osso di Gomma';
$price = '5.00';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$materials = 'Gomma';
$target = 'Cani';

$osso = new PetToy($name, $price, $description, $materials, $target);

$name = 'Cannetta con Piuma';
$price = '5.00';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$materials = 'Plastica, Piume';
$target = 'Gatti';

$cannetta = new PetToy($name, $price, $description, $materials, $target);

$name = 'Cuscino Cuccia';
$price = '19.99';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$size = 'L';
$category = 'Cucce, lettini e cuscini';

$cuscino = new PetAccessory($name, $price, $description, $size, $category);

$name = 'Pettorina';
$price = '14.99';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$size = 'M';
$category = 'Pettorine, guinzagli & co.';

$pettorina = new PetAccessory($name, $price, $description, $size, $category);


var_dump($crocchette, $carne, $osso, $cannetta, $cuscino, $pettorina);
