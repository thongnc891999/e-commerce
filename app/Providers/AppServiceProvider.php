<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register Bootstrap
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $cartQty = session('carts') ? count(session('carts')) : 0;
            $view->with('cartQty', $cartQty);
        });
    }
}
