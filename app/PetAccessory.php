<?php

include_once __DIR__ . '/Product.php';

class PetAccessory extends Product
{
  public $size;
  public $category;

  function __construct($name, $price, $description, $volume, $size, $category)
  {
    parent::__construct($name, $price, $description, $volume);
    $this->size = $size;
    $this->category = $category;
  }
}
