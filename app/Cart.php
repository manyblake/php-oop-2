<?php

class Cart
{
  private $total;
  private $totalOrderLiters;
  private $shippingFees;

  function calculateTotal($order)
  {
    foreach ($order as $value)
      $this->total += $value->price;
  }

  function getTotal()
  {
    return $this->total + $this->shippingFees;
  }

  function calculateShippingFees($order)
  {
    foreach ($order as $value)
      $this->totalOrderLiters += $value->volume;

    if ($this->total > 200)
      $this->shippingFees = 0;
    else {
      switch ($this->totalOrderLiters) {
        case $this->totalOrderLiters > 100 && $this->totalOrderLiters < 201:
          $this->shippingFees = 50;
          break;
        case $this->totalOrderLiters > 200 && $this->totalOrderLiters < 301:
          $this->shippingFees = 80;
          break;
        case $this->totalOrderLiters > 300:
          $this->shippingFees = 120;
          break;
      }
    }
  }

  function getShippingFees()
  {
    return $this->shippingFees;
  }
}
