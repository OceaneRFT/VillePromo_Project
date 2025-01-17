<?php

namespace App\Providers;

use App\Http\View\Composers\HeaderComposer;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        
        // Using closure based composers...
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });

        return Schema::defaultStringLength(192);
    }
}
