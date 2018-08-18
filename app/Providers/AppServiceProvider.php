<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Category;
use Illuminate\Support\Facades\View;

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

        $usd = json_decode(file_get_contents('http://www.nbrb.by/API/ExRates/Rates/145'))->Cur_OfficialRate;
        $euro = json_decode(file_get_contents('http://www.nbrb.by/API/ExRates/Rates/292'))->Cur_OfficialRate;
        $curs = [$usd,$euro];
        View::composer('layouts.header', function ($view) use($curs){
            $view->with('curs', $curs);
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
