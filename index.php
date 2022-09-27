<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccessory.php';


$name = 'Crocchette di Manzo';
$price = '69.99';
$description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit';
$expirationDate = '12/12/2024';
$ingredients = 'Lorem ipsum dolor sit amet';

$crocchette = new PetFood($name, $price, $description, $expirationDate, $ingredients);

var_dump($crocchette);
