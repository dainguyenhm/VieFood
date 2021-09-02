<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\Banner;
use App\Product;

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
        Schema::defaultStringLength(191);

        view()->composer(['layouts.slide-show'], function($view){
            $slides = Banner::where('type', 1)->take(3)->get();
            $banner_bottom = Banner::where('type', 2)->orderBy('id', 'DESC')->first();
            $view->with('slides', $slides);
            $view->with('banner_bottom', $banner_bottom);
        });

        view()->composer(['layouts.slide-product'], function($view){
            $slide_products = Product::where('hot', 1)->take(8)->get();
            $view->with('slide_products', $slide_products);
        });
    }
}
