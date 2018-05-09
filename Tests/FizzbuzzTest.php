<?php

require '../vendor/autoload.php';

use App\Fizzbuzz;
use PHPUnit\Framework\TestCase;

class FizzbuzzTest extends TestCase
{
	public function test_it_returns_fizz_when_3()
	{
		$fb = new Fizzbuzz();
		$this->assertEquals('Fizz', $fb->execute(3));
	}
	public function test_it_returns_buzz_when_5()
	{
		$fb = new Fizzbuzz();
		$this->assertEquals('Buzz', $fb->execute(5));
	}
	public function test_it_returns_fizzbuzz_when_15()
	{
		$fb = new Fizzbuzz();
		$this->assertEquals('FizzBuzz', $fb->execute(15));
	}
	public function test_it_returns_number_when_others()
	{
		$fb = new Fizzbuzz();
		$this->assertEquals(4, $fb->execute(4));
	}
}