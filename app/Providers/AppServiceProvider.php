<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        // Register Blade components
        Blade::component('components.navbar', 'navbar');
        Blade::component('components.footer', 'footer');
        Blade::component('components.sidebar', 'sidebar');
        Blade::component('components.card', 'card');
    }
}