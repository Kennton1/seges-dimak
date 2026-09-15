<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\RoutePlanning;
use App\Policies\RoutePlanningPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registra cualquier servicio de la aplicación.
     */
    public function register(): void
    {
        //
    }

    /**
     * Inicializa cualquier servicio de la aplicación.
     */
    public function boot(): void
    {
        Gate::policy(RoutePlanning::class, RoutePlanningPolicy::class);

        // Forzar HTTPS en producción o al estar detrás del proxy de Vercel
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']) || (isset($_SERVER['HTTP_HOST']) && !str_contains($_SERVER['HTTP_HOST'], '127.0.0.1') && !str_contains($_SERVER['HTTP_HOST'], 'localhost'))) {
            URL::forceScheme('https');
        }
    }
}
