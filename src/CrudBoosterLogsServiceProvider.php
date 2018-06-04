<?php

namespace Imanghafoori\CrudBoosterLogs;

use Imanghafoori\CrudBoosterLogs\Listeners\Auth;
use Imanghafoori\CrudBoosterLogs\Listeners\CRUD;
use Illuminate\Support\ServiceProvider;

class CrudBoosterLogsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'CbLogger');
        $this->loadRoutesFrom( __DIR__.'/logs_routes.php');
        $this->publishes([__DIR__.'/localization' => resource_path('lang')], 'cb_localization');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        Auth::registerListeners();
        CRUD::registerListeners();
        app('CbDynamicMenus')->addMenu('CbLogger::log');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
