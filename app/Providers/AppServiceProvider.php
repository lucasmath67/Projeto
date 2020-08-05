<?php

namespace App\Providers;

use App\Repositories\API\AuthRepository;
use App\Repositories\API\Contracts\AuthRepositoryInterface;
use App\Repositories\API\Contracts\RegisterRepositoryInterface;
use App\Repositories\Api\RegisterRepository;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class)
            ;

        $this->app->bind(
            RegisterRepositoryInterface::class,
            RegisterRepository::class
            );
        $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
            );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
