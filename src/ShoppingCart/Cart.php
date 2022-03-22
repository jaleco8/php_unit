<?php

namespace App\ShoppingCart;

class Cart
{
  private $cart;
  public $id;

  public function __construct()
  {
    $this->id = uniqid();
    $this->cart = [];
  }

  public function addItem(CartItem $item): void
  {
    $this->cart[] = $item;
  }

  public function addItems(array $items): void
  {
    $this->cart = array_merge($this->cart, $items);
  }

  public function getFirstItem(): CartItem
  {
    return reset($this->cart);
  }

  public function count(): int
  {
    return count($this->cart);
  }

  public function isEmpty(): bool
  {
    return empty($this->cart);
  }

  public function removeItem($id): void
  {
    foreach ($this->cart as $key => $item) {
      if ($item->id === $id) {
        unset($this->cart[$key]);
      }
    }
  }
}
