<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
//Blog
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('blog/single/{slug}', [PostController::class, 'show'])->name('single.blog');
Route::post('blog/comment/create', [PostController::class, 'commentCreate'])->name('add.post.comment');
//Blog end
//Tags
Route::get('blog/tag/{slug}', [TagController::class, 'tagFilter'])->name('post.tag');
//Tags end
//Category
Route::get('blog/category/{slug}', [CategoryPostController::class, 'postFilter'])->name('post.category');
//Category end
//Contact us
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contacts');
Route::post('new-contacts', [ContactUsController::class, 'store'])->name('create.contacts');
//Contact us end
Route::get('about-us', function () {
    return view('pages.about-us');
})->name('about');
Route::get('faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');
Route::get('shop', function () {
    return view('pages.shop.shop');
})->name('shop');


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
    Route::get('blog-list', [PostController::class, 'blogList'])->name('blog.list');
    Route::get('blog/post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('blog/post/create', [PostController::class, 'create'])->name('post.create');
    Route::get('blog/post/edit', [PostController::class, 'create'])->name('post.edit');
    Route::post('blog/post/store', [PostController::class, 'store'])->name('post.store');
    //blog end
    Route::resource('tag', TagController::class,[   'names' => [
        'index' => 'tag',
        'store' => 'tag.store',
        'destroy' => 'tag.destroy'

    ]  ]);
//tag end
    Route::get('instagram', [InstagramController::class, 'index'])->name('admin.instagram');
    Route::get('get-instagram', [InstagramController::class, 'getInstaPosts'])->name('get.instagram');
    Route::post('set-instagram', [InstagramController::class, 'setInstaSettings'])->name('set.instagram.settings');
    Route::get('contact-request', [ContactUsController::class, 'requestList'])->name('contacts.admin');


});

//Auth & Social
Auth::routes();
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
