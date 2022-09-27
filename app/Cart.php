<?php

class Cart
{
  public $total;

  function calculateTotal($order)
  {
    foreach ($order as $value)
      $this->total += $value->price;
  }
}
