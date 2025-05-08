<?php

namespace Whittaker\Freshworks;

/**
 * The service provider for laravel-freshworks
 *
 * @license MIT
 */

class FreshworksServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): Void
    {
        $this->publishes([
            __DIR__.'/../config/freshworks.php' => config_path('freshworks.php'),
        ], 'laravel-freshworks');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): Void
    {
        $this->app->bind('freshworks', function($app) {
            return new Freshworks;
        });
    }
}
