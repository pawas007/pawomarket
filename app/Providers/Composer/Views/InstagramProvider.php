<?php

namespace App\Providers\Composer\Views;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class InstagramProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $lastPost = Cache::get('instagram');
        View::composer([
            'pages.partials.instagram',
        ], function ($view) use ($lastPost) {
            return $view->with(['lastPost'=> $lastPost]);
        });
    }
}
