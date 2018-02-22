<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layouts.sidebar', function ($view) {
          $view->with('authors', \App\Author::pluck('username'));
        });

        view()->composer('layouts.sidebar', function ($view) {
          $view->with('categories', \App\Category::pluck('name'));
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
