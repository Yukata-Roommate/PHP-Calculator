<?php

namespace YukataRm\Calculator\Proxy;

use YukataRm\Calculator\Interface\CalculatorInterface;
use YukataRm\Calculator\Calculator;

/**
 * Proxy Manager
 * 
 * @package YukataRm\Calculator\Proxy
 * 
 * @method static int|float addition(int|float $augend, int|float $addend, bool $isRound = false)
 * @method static int|float subtraction(int|float $minuend, int|float $subtrahend, bool $isRound = false)
 * @method static int|float multiplication(int|float $multiplicand, int|float $multiplier, bool $isRound = false)
 * @method static int|float division(int|float $dividend, int|float $divisor, bool $isRound = false)
 * @method static int remainder(int|float $dividend, int|float $divisor)
 * @method static int|float power(int|float $number, int $exponent)
 * @method static int|float squared(int|float $number)
 * @method static int|float cubed(int|float $number)
 * 
 * @method static bool isOdd(int $number)
 * @method static bool isEven(int $number)
 * @method static bool isPrime(int $number)
 * 
 * @method static string|int factorial(int $number, bool $returnString = false)
 * 
 * @method static int primeCount(int $number)
 * @method static array primeFactorization(int $number)
 * 
 * @method static int fibonacci(int $number)
 * 
 * @see \YukataRm\Calculator\Proxy\Manager
 */
class Manager
{
    /**
     * make Calculator instance
     *
     * @return \YukataRm\Calculator\Interface\CalculatorInterface
     */
    public function make(): CalculatorInterface
    {
        return new Calculator();
    }

    /**
     * call Calculator method
     * 
     * @param string $name
     * @param array<mixed> $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        $instance = $this->make();

        if (!method_exists($instance, $name)) throw new \BadMethodCallException("method " . Calculator::class . "::{$name}() does not exist.");

        return $instance->$name(...$arguments);
    }

    /*----------------------------------------*
     * Operate
     *----------------------------------------*/

    /**
     * calculate sum of augend and addend
     * 
     * @param int|float $augend
     * @param int|float $addend
     * @param bool $isRound
     * @return int|float
     */
    public function add(int|float $augend, int|float $addend, bool $isRound = false): int|float
    {
        return $this->addition($augend, $addend, $isRound);
    }

    /**
     * calculate difference between minuend and subtrahend
     * 
     * @param int|float $minuend
     * @param int|float $subtrahend
     * @param bool $isRound
     * @return int|float
     */
    public function sub(int|float $minuend, int|float $subtrahend, bool $isRound = false): int|float
    {
        return $this->subtraction($minuend, $subtrahend, $isRound);
    }

    /**
     * calculate product of multiplicand and multiplier
     * 
     * @param int|float $multiplicand
     * @param int|float $multiplier
     * @param bool $isRound
     * @return int|float
     */
    public function mul(int|float $multiplicand, int|float $multiplier, bool $isRound = false): int|float
    {
        return $this->multiplication($multiplicand, $multiplier, $isRound);
    }

    /**
     * calculate quotient of dividend and divisor
     * 
     * @param int|float $dividend
     * @param int|float $divisor
     * @param bool $isRound
     * @return int|float
     */
    public function div(int|float $dividend, int|float $divisor, bool $isRound = false): int|float
    {
        return $this->division($dividend, $divisor, $isRound);
    }
}
