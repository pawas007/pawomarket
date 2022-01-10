<?php

namespace App\Providers\Composer\Views;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Sidebar extends ServiceProvider
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
        $tags = Tag::all();
        $lastPost = Post::orderBy('id', 'desc')->take(3)->get();
        View::composer([
            'pages.partials.sidebar.sidebar',
        ], function ($view) use ($tags,$lastPost) {
            return $view->with(['tags'=> $tags,'lastPost'=> $lastPost]);
        });

    }
}
