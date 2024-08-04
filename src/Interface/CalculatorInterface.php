<?php

namespace YukataRm\Calculator\Interface;

/**
 * Calculator Interface
 * 
 * @package YukataRm\Calculator\Interface
 */
interface CalculatorInterface
{
    /*----------------------------------------*
     * Operate
     *----------------------------------------*/

    /**
     * calculate the sum of augend and addend
     * 
     * @param int|float $augend
     * @param int|float $addend
     * @param bool $isRound
     * @return int|float
     */
    public function addition(int|float $augend, int|float $addend, bool $isRound = false): int|float;

    /**
     * calculate the difference between minuend and subtrahend
     * 
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function subtraction(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float;

    /**
     * calculate the product of multiplicand and multiplier
     * 
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function multiplication(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float;

    /**
     * calculate the quotient of dividend and divisor
     * 
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function division(int|float $dividend, int|float $divisor, bool $isRound = false): int|float;

    /**
     * calculate the remainder of dividend and divisor
     * 
     * @param int $dividend
     * @param int $divisor
     * @return int
     */
    public function remainder(int|float $dividend, int|float $divisor): int;

    /**
     * calculate the power of number and exponent
     * 
     * @param int|float $number
     * @param int $exponent
     * @return int|float
     */
    public function power(int|float $number, int $exponent): int|float;

    /**
     * calculate the square of number
     * 
     * @param int|float $number
     * @return int|float
     */
    public function squared(int|float $number): int|float;

    /**
     * calculate the cube of number
     * 
     * @param int|float $number
     * @return int|float
     */
    public function cubed(int|float $number): int|float;

    /*----------------------------------------*
     * Check
     *----------------------------------------*/

    /**
     * check if number is odd
     * 
     * @param int $number
     * @return bool
     */
    public function isOdd(int $number): bool;

    /**
     * check if number is even
     * 
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool;

    /**
     * check if number is prime
     * 
     * @param int $number
     * @return bool
     */
    public function isPrime(int $number): bool;

    /*----------------------------------------*
     * Factorial
     *----------------------------------------*/

    /**
     * calculate the factorial of number
     * 
     * @param int $number
     * @param bool $returnString
     * @return string|int
     */
    public function factorial(int $number, bool $returnString = false): string|int;

    /*----------------------------------------*
     * Prime
     *----------------------------------------*/

    /**
     * count the number of prime factors of number
     * 
     * @param int $number
     * @param int $primeNumber
     * @return int
     */
    public function primeCount(int $number, int $primeNumber): int;

    /**
     * calculate the prime factorization of number
     * 
     * @param int $number
     * @return array<int, int>
     */
    public function primeFactorization(int $number): array;

    /*----------------------------------------*
     * Fibonacci
     *----------------------------------------*/

    /**
     * calculate the fibonacci of number
     * 
     * @param int $number
     * @return int
     */
    public function fibonacci(int $number): int;
}
