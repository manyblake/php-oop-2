<?php

trait AddToCart
{

  public function addToCart($order, $element)
  {
    if (gettype($element) == 'object') {
      $order[] = $element;
      return $order;
    } else {
      throw new Exception("L'elemento aggiunto al carrello non è valido");
    }
  }
}
