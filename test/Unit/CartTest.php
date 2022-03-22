<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\ShoppingCart\Cart;
use App\ShoppingCart\CartItem;

class CartTest extends TestCase
{
  public function testAddItem()
  {
    $item = new CartItem('Test', 1);
    $cart = new Cart();
    $this->assertEquals(0, $cart->count());
    $cart->addItem($item);
    $this->assertEquals(1, $cart->count());
  }

  public function testAddItems()
  {
    $items = [
      new CartItem('Test 1', 1),
      new CartItem('Test 2', 1),
    ];
    $cart = new Cart();
    $this->assertEquals(0, $cart->count());
    $cart->addItems($items);
    $this->assertEquals(2, $cart->count());
  }

  public function testGetFirstItem()
  {
    $cart = new Cart();
    $cart->addItem(new CartItem('Test', 1));
    $this->assertEquals('Test', $cart->getFirstItem()->getName());
  }

  public function testIsEmpty()
  {
    $cart = new Cart();
    $this->assertTrue($cart->isEmpty());
  } 

  public function testItRemove() {
    $item = new CartItem('Test', 1);
    $cart = new Cart();
    $cart->addItem($item);
    $this->assertEquals(1, $cart->count());
    $cart->removeItem($item->id);
    $this->assertTrue($cart->isEmpty());
  }
}
