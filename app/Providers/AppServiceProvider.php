<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('activeroute', function ($route) {
            return "<?php echo Route::currentRouteNamed($route) ? 'active' : '' ?>";
        });




//        Blade::directive('activefilter', function ($slug) {
//
/*            return "<?php ; ?>";*/
//        });


        Blade::directive('activefiltertag', function ($expression) {
            return "<?php echo route('post.tag', {$expression}) == url()->current() ? 'active' : ''; ?>";
        });


        Blade::directive('activefiltercat', function ($expression) {
            return "<?php echo route('post.category', {$expression}) == url()->current() ? 'active' : ''; ?>";
        });





    }
}
