<?php

namespace TallAndSassy\TasUiLooks;

use Illuminate\Support\ServiceProvider;

class TasUiLooksServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tas');
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tallandsassy');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'tallandsassy');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tasuilooks.php', 'tasuilooks');

        // Register the service the package provides.
        $this->app->singleton('tasuilooks', function ($app) {
            return new TasUiLooks;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tasuilooks'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/tasuilooks.php' => config_path('tasuilooks.php'),
        ], 'tasuilooks.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/tallandsassy'),
        ], 'tasuilooks.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/tallandsassy'),
        ], 'tasuilooks.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/tallandsassy'),
        ], 'tasuilooks.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
