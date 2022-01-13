<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryPostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Blog
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('blog/single/{slug}', [PostController::class, 'show'])->name('single.blog');
Route::get('blog/post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('blog/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('blog/comment/create', [PostController::class, 'commentCreate'])->name('add.post.comment');
//Blog end
//Tags end
Route::get('blog/tag/{slug}', [TagController::class, 'postTag'])->name('post.tag');
Route::get('blog/category/{slug}', [CategoryPostController::class, 'postCategory'])->name('post.category');

//Tags end
Route::get('contact-us', function () {return view('pages.contact-us');})->name('contacts');
Route::get('about-us', function () {return view('pages.about-us');})->name('about');

Route::get('faq', function () {return view('pages.faq');})->name('faq');
Route::get('privacy-policy', function () {return view('pages.privacy-policy');})->name('privacy-policy');
Route::get('shop', function () {return view('pages.shop.shop');})->name('shop');





Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('account.pages.dashboard');
    })->name('dashboard');
    Route::get('orders', function () {
        return view('account.pages.orders');
    })->name('orders');
    Route::get('details', function () {
        return view('account.pages.account-details');
    })->name('details');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('blog-list', [PostController::class, 'blogList'])->name('blog-list');
});

//Auth & Social
Auth::routes();
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
