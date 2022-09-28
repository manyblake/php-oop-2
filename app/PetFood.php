<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/AddToCart.php';


class PetFood extends Product
{
  public $expirationDate;
  public $ingredients;
  use AddToCart;

  function __construct($name, $price, $description, $volume, $expirationDate, $ingredients)
  {
    parent::__construct($name, $price, $description, $volume);
    $this->expirationDate = $expirationDate;
    $this->ingredients = $ingredients;
  }
}
