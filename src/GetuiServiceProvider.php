<?php

namespace Fallbort\Getui;

use Illuminate\Support\ServiceProvider;

class GetuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/config/getui.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('getui.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('getui');
        }
        $this->mergeConfigFrom($source, 'getui');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('getui', function ($app) {
            return new Getui;
        });
    }
}
