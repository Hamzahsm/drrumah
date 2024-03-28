<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon; //timezone
use Illuminate\Pagination\Paginator; //pagination

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // set timezone to indonesia
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        //pagination with bootstrap
        Paginator::useBootstrap();
    }
}
