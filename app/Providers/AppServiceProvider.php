<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
        View::share('popular_manuals',\App\Models\Type::orderBy('views','desc')->limit('10')->get());
        View::share('popular_type_manuals',\App\Models\Type::orderBy('views','desc')->limit('5')->get());

    }
}
