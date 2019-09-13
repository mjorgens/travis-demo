<?php

declare(strict_types=1);

namespace App\Tests;

use App\PrimeNumber;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class PrimeNumberTest extends TestCase
{

    public function setUp(): void
    {
        $this->harness = new PrimeNumber();
    }

    public function testCanary(): void
    {
        // arrange & act & assert
        $this->assertTrue($this->harness instanceof PrimeNumber);
    }

    public function testGetNthPrimeSuccess1(): void
    {
        // arrange
        $expected = 5;
        // act
        $actual = $this->harness->getNthPrime(3);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testGetNthPrimeSuccess2(): void
    {
        // arrange
        $expected = 7927;
        // act
        $actual = $this->harness->getNthPrime(1001);
        // assert
        $this->assertEquals($expected, $actual);
    }

    public function testGetNthPrimeFail(): void
    {
        $this->expectException(InvalidArgumentException::class);

        // act
        $actual = $this->harness->getNthPrime(-1);

    }

    public function testIsPrimeSuccess(): void
    {
        // act
        $actual = $this->harness->isPrime(3);
        // assert
        $this->assertTrue($actual);
    }

    public function testIsPrimeFail(): void
    {
        // act
        $actual = $this->harness->isPrime(4);
        // assert
        $this->assertFalse($actual);
    }


}
