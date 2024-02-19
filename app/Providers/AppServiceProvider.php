<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('base', function ($view) {
            $cartNbr = 0;
            if (Auth::check()) {
                $cartNbr = Auth::user()->beersCart->count();
            }
            $view->with('cartNbr', $cartNbr);
        });

    }
}
