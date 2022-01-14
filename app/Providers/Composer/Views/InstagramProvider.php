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
        $instagramLastPost = Cache::get('instagram');
        View::composer([
            'pages.partials.instagram',
            'pages.partials.sidebar.sidebar',
        ], function ($view) use ($instagramLastPost ) {
            return $view->with(['instagramLastPost'=> $instagramLastPost ]);
        });
    }
}
