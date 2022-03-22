<?php
namespace Test\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;


class FirsTest extends TestCase
{
    public function testSum()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->sum(2, 2));
        $this->assertInstanceOf(Calculator::class, $calculator);
    }

    public function testAsserts ()
    {
      self::assertTrue(true);

      $this->assertClassHasAttribute('data', Calculator::class);

      $this->assertContains(2, [1, 2, 3]);
    }
}
