<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    // service providers

    // view composer

    public function boot()
    {
        view()->composer('layouts.sidebar', function($view){

            $view->with('archives', \App\Post::archives()); 

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('App\Billing\Stripe', function(){

            return new \App\Billing\Stripe(config('services.stripe.secret'));

        });
    }
}
