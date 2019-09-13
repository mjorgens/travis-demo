<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class PrimeNumber
{
    private $_primes;
    private $nth;

    public function __construct($input = 0)
    {
        if ($input < 0) {
            throw new InvalidArgumentException();
        }

        for ($i = 0; $i <= 10000; $i++) {
            if ($this->isPrime($i)) {
                $this->_primes[] = $i;
            }
        }

        $this->nth = $this->getNthPrime($input);
    }

    public function __toString(): string
    {
        return '/App/PrimeNumber';
    }

    public function getNthPrime($n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException();
        }
        return $this->_primes[$n];
    }

    public function isPrime($num): bool
    {
        if ($num === 1) {
            return false;
        }

        if ($num === 2) {
            return true;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }

        return true;
    }
}