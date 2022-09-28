<?php

trait AddToCart
{

  public function addToCart($order, $element)
  {
    $order[] = $element;
    return $order;
  }
}
