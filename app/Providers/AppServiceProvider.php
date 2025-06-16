<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // AQUI SE REGISTRAN LOS SERVICIOS DE LA APLICACIÓN
        // $this->app->bind('App\Services\SesionService','App\Services\Implementations\SesionServiceImpl');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // AQUI SE INICIALIZAN LOS SERVICIOS DE LA APLICACIÓN
    }
}
