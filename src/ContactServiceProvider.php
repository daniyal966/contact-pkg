<?php

namespace Alice\Config;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // $this->publishes([
        //     __DIR__.'/../resources/views' => resource_path('views/vendor/courier'),
        // ]);

    }

    public function register()
    {

    }

}