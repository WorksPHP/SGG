<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('App\SGG\Account\AccountInterface', 'App\SGG\Account\AccountRepository');
    }
}