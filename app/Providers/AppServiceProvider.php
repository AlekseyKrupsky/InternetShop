<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        $allcategorys = Category::all();
//        view()->composer()
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
