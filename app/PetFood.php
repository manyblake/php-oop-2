<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
  public $expirationDate;
  public $ingredients;

  function __construct($name, $price, $description, $expirationDate, $ingredients)
  {
    parent::__construct($name, $price, $description);
    $this->expirationDate = $expirationDate;
    $this->ingredients = $ingredients;
  }

  public function setExpirationDate($expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }
}
