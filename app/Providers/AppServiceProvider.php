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

        View::share('menu', $menu);
    }
}
