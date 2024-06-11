<?php

namespace App\Providers;

use App\Repositories\CustomerRepository;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
