<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{
  public $materials;
  public $target;

  function __construct($name, $price, $description, $materials, $target)
  {
    parent::__construct($name, $price, $description);
    $this->materials = $materials;
    $this->target = $target;
  }
}
