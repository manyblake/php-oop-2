<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{
  public $materials;
  public $target;

  function __construct($name, $price, $description, $volume, $materials, $target)
  {
    parent::__construct($name, $price, $description, $volume);
    $this->materials = $materials;
    $this->target = $target;
  }
}
