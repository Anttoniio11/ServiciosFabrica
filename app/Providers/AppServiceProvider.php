<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;
use App\Services\Impl\ProductServiceImpl;
use App\Services\Impl\UsuariosServiceImpl;
use App\Services\UsuariosService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // AQUI SE REGISTRAN LOS SERVICIOS DE LA APLICACIÓN
         $this->app->bind(ProductService::class, ProductServiceImpl::class);
         $this->app->bind(UsuariosService::class, UsuariosServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // AQUI SE INICIALIZAN LOS SERVICIOS DE LA APLICACIÓN
    }
}
