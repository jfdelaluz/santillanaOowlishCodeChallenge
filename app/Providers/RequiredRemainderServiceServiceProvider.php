<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RequiredRemainderServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Interfaces\RequiredRemainderServiceInterface',
            'App\Services\RequiredRemainderService'
        );
    }
}
