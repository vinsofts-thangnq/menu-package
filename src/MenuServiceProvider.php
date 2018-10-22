<?php

namespace Thangbeo\Menu;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        include __DIR__.'/model/menu.php';
        include __DIR__.'/controller/MenuController.php';
        $this->loadMigrationsFrom(__DIR__.'/migration');
        $this->publishes([__DIR__.'/public/asset-menu' => public_path('asset-menu')], 'public'); //cop public trong packages ra public cua app
        $this->loadViewsFrom(__DIR__.'/views', 'menu');
   
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
