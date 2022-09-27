<?php

class Product
{
  public $name;
  public $price;
  public $description;
  public $volume;

  function __construct($name, $price, $description, $volume)
  {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->volume = $volume;
  }
}
