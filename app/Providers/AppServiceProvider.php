<?php

namespace App\Providers;

use App\Serviсes\UserService;
use App\Strategies\PaymentStrategies\EURPaymentHandler;
use App\Strategies\PaymentStrategies\UAHPaymentHandler;
use App\Strategies\PaymentStrategies\USDPaymentHandler;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserService::PREFIX_FOR_PAYMENT . 'USD', function ($app){
            return new USDPaymentHandler();
        });

        $this->app->bind(UserService::PREFIX_FOR_PAYMENT . 'UAH', function ($app){
            return new UAHPaymentHandler();
        });

        $this->app->bind(UserService::PREFIX_FOR_PAYMENT . 'EUR', function ($app){
            return new EURPaymentHandler();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
