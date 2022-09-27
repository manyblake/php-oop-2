<?php

include_once __DIR__ . '/Product.php';

class PetAccessory extends Product
{
  public $size;
  public $category;

  function __construct($name, $price, $description, $size, $category)
  {
    parent::__construct($name, $price, $description);
    $this->size = $size;
    $this->category = $category;
  }
}
