<?php

namespace YukataRm\Laravel\Calculator\Provider;

use Illuminate\Support\ServiceProvider;

use YukataRm\Laravel\Calculator\Facade\Manager;
use YukataRm\Laravel\Calculator\Facade\Calculator;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Calculator\Provider
 */
class FacadeServiceProvider extends ServiceProvider
{
    /**
     * register Facade
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Calculator::class, function () {
            return new Manager();
        });
    }
}
