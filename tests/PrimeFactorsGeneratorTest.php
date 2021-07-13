<?php

use Inc\PrimeFactorsGenerator;
use PHPUnit\Framework\TestCase;

class PrimeFactorsGeneratorTest extends TestCase
{
	public function testItReturnsAnEmptyArrayForOne()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(1);

		$this->assertEmpty($primeFactors);
	}


	public function testItReturnsTwoForTwo()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(2);

		$this->assertEquals([2], $primeFactors);
	}

	public function testItReturns3For3()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(3);

		$this->assertEquals([3], $primeFactors);
	}

	public function testItReturnsFourForFour()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(4);

		$this->assertEquals([2, 2], $primeFactors);
	}

	public function testItReturnsFiveForFive()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(5);

		$this->assertEquals([5], $primeFactors);

	}

	public function testItReturnsThreeTimesThreeForNine()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(9);

		$this->assertEquals([3, 3], $primeFactors);
	}

	public function testItReturnsTwoTimesTwoTimesFiveTimesFiveForOneHundred()
	{
		$generator = new PrimeFactorsGenerator;
		$primeFactors = $generator->generate(100);

		$this->assertEquals([2, 2, 5, 5], $primeFactors);
	}


}
