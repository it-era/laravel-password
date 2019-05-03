<?php

namespace ITera\LaravelPassword\Providers;

use Illuminate\Support\ServiceProvider;

use ITera\LaravelPassword\Console\Commands\CallMakePassword;
use ITera\LaravelPassword\Console\Commands\MakePassword;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CallMakePassword::class,
                MakePassword::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
