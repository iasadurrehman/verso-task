<?php
use PHPUnit\Framework\TestCase;

require_once 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
  public function testFizz()
  {
    $this->assertEquals("Fizz", fizzbuzz(3));
    $this->assertEquals("Fizz", fizzbuzz(6));
    $this->assertEquals("Fizz", fizzbuzz(9));
  }

  public function testBuzz()
  {
    $this->assertEquals("Buzz", fizzbuzz(5));
    $this->assertEquals("Buzz", fizzbuzz(10));
    $this->assertEquals("Buzz", fizzbuzz(20));
  }

  public function testFizzBuzz()
  {
    $this->assertEquals("FizzBuzz", fizzbuzz(15));
    $this->assertEquals("FizzBuzz", fizzbuzz(30));
    $this->assertEquals("FizzBuzz", fizzbuzz(45));
  }

  public function testNumber()
  {
    $this->assertEquals(1, fizzbuzz(1));
    $this->assertEquals(7, fizzbuzz(7));
    $this->assertEquals(98, fizzbuzz(98));
  }
}
