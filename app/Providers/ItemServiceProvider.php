<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\SGG\Item\ItemInterface', 'App\SGG\Item\ItemRepository');
    }
}
