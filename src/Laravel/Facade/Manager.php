<?php

namespace YukataRm\Laravel\Calculator\Facade;

use YukataRm\Calculator\Proxy\Manager as PHPCalculatorManager;

use YukataRm\Laravel\Calculator\Interface\CalculatorInterface;
use YukataRm\Laravel\Calculator\Calculator;

/**
 * Facade Manager
 * 
 * @package YukataRm\Laravel\Calculator\Facade
 */
class Manager extends PHPCalculatorManager
{
    /**
     * make Laravel Calculator instance
     *
     * @return \YukataRm\Laravel\Calculator\Interface\CalculatorInterface
     */
    public function make(): CalculatorInterface
    {
        return new Calculator();
    }
}
