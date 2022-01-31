<?php

namespace App\Providers\Composer\Views;

use App\Models\CategoryPost;
use App\Models\Currency;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderProvider extends ServiceProvider
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
        $currency = Currency::all();
        $mainCurrency = Currency::where('is_main',true)->firstOrFail();
        View::composer([
            'layouts.partials.header.top-header',
        ], function ($view) use ($currency,$mainCurrency) {
            return $view->with(['currency'=> $currency,'mainCurrency'=>$mainCurrency ]);
        });
    }
}
