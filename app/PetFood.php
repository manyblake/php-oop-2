<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
  public $expirationDate;
  public $ingredients;

  function __construct($name, $price, $description, $volume, $expirationDate, $ingredients)
  {
    parent::__construct($name, $price, $description, $volume);
    $this->expirationDate = $expirationDate;
    $this->ingredients = $ingredients;
  }
}
