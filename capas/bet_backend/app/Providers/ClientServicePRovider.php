<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ClientRepositoryInterface',
            'App\Repositories\ClientRepository'
        );
    }
}