<?php

namespace Wanderreisen\Newsletter2Go;

use Illuminate\Support\ServiceProvider;

class Newsletter2GoServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
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
        $this->mergeConfigFrom(__DIR__.'/../config/newsletter2go.php', 'newsletter2go');

        // Register the service the package provides.
        $this->app->singleton('newsletter2go', function ($app) {
            return new Newsletter2Go;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['newsletter2go'];
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
            __DIR__.'/../config/newsletter2go.php' => config_path('newsletter2go.php'),
        ], 'newsletter2go.config');

        // Registering package commands.
        // $this->commands([]);
    }
}
