<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
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
        $menu = [
            [
                'title' => 'Новости',
                'alias' => 'news::all'
            ],
            [
                'title' => 'О нас',
                'alias' => 'about'
            ]
        ];

        $category = Category::all();

        View::share([
            'menu' => $menu,
            'category' => $category
        ]);

        Paginator::useBootstrap();
    }
}
