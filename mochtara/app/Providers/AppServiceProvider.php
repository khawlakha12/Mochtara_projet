<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category; 
use App\Models\Design;
use App\Models\Product;
use App\Models\Commande;
use App\Models\User;
use App\Models\Size;

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
        View::share('categories', Category::all());
        View::share('designs', Design::all());
        View::share('products', Product::all());
        View::share('commandes', Commande::all());
        View::share('users', User::all());
        View::share('sizes', Size::all());
      
    }
}
