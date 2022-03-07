<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\StaticPages;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CartController;
use App\Http\Services\CartService;
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


//Blog

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [PostController::class, 'index'])->name('blog');
    Route::get('single/{slug}', [PostController::class, 'show'])->name('single.blog');
    Route::post('search', [PostController::class, 'search'])->name('search.blog');
    Route::post('comment/create', [PostController::class, 'commentCreate'])->name('add.post.comment');
    Route::get('tag/{slug}', [TagController::class, 'tagFilter'])->name('post.tag');
    Route::get('category/{slug}', [CategoryPostController::class, 'postFilter'])->name('post.category');
});
//Contact us
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contacts');
Route::post('new-contacts', [ContactUsController::class, 'store'])->name('create.contacts');
//Contact us end


Route::resource('cart', CartController::class)->only('index');
Route::post('cart/add', [CartController::class,'addToCart']);
Route::post('cart/count', [CartController::class,'cardCount']);
Route::post('cart/remove', [CartController::class,'removeProductCart']);










Route::resource('products', ProductController::class)->only('index','show');
Route::post('product/comment/create', [ProductController::class, 'commentCreate'])->name('add.product.comment');
Route::get('product/fastshow/{id}', [ProductController::class, 'quickView']);







//Product end
Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('account.pages.dashboard');
    })->name('dashboard');
    Route::get('orders', function () {
        return view('account.pages.orders');
    })->name('orders');


    Route::get('account', [UserController::class, 'show'])->name('account');
    Route::patch('account-update/{id}', [UserController::class, 'update'])->name('update.account');
    Route::patch('password-update', [UserController::class, 'updatePassword'])->name('update.password');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::group(['prefix' => 'blog'], function () {
        Route::get('list', [PostController::class, 'blogList'])->name('blog.list');
        Route::get('post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
        Route::get('post/create', [PostController::class, 'create'])->name('post.create');
        Route::get('post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('post/store', [PostController::class, 'store'])->name('post.store');
        Route::get('post/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
        Route::get('post/search', [PostController::class, 'searchPostAdmin'])->name('post.admin.search');
        Route::patch('post/update/{id}', [PostController::class, 'update'])->name('post.admin.update');
        Route::resource('products', ProductController::class)->only('store','create');


    });

    //blog end
    Route::resource('tag', TagController::class, ['names' => [
        'index' => 'tag',
        'store' => 'tag.store',
        'edit' => 'tag.edit',
        'destroy' => 'tag.destroy',
        'update' => 'tag.update'


    ]]);

//tag end
    Route::resource('categoryPost', CategoryPostController::class, ['names' => [
        'index' => 'categoryPost',
        'store' => 'categoryPost.store',
        'edit' => 'categoryPost.edit',
        'destroy' => 'categoryPost.destroy',
        'update' => 'categoryPost.update'

    ]]);

    //postCategory end

    Route::get('update-currency', [CurrencyController::class, 'updateCurrencyValues'])->name('update.currency');
    Route::get('currency', [CurrencyController::class, 'index'])->name('currency');
    Route::get('set-main-currency/{id}', [CurrencyController::class, 'setMainCurrency'])->name('set.main.currency');
    Route::get('remove-currency/{id}', [CurrencyController::class, 'destroy'])->name('remove.currency');
    Route::post('store-currency', [CurrencyController::class, 'store'])->name('store.currency');




    //    currency end

    Route::get('instagram', [InstagramController::class, 'index'])->name('admin.instagram');
    Route::get('get-instagram', [InstagramController::class, 'getInstaPosts'])->name('get.instagram');
    Route::post('set-instagram', [InstagramController::class, 'setInstaSettings'])->name('set.instagram.settings');
    Route::get('contact-request', [ContactUsController::class, 'requestList'])->name('contacts.admin');

    Route::get('subscribers', [SubscribeController::class, 'index'])->name('subscribers');


});

//Auth & Social
Auth::routes();
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);


//Static Pages
Route::get('about-us', [StaticPages::class,'about'] )->name('about');
Route::get('faq', [StaticPages::class,'faq'])->name('faq');
Route::get('privacy-policy', [StaticPages::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('change-currency/{id}', [CurrencyController::class, 'changeCurrency'])->name('change.currency');
Route::resource('subscribe', SubscribeController::class)->only('store');
Route::get('unsubscribe/{id}', [SubscribeController::class,'unSubscribe']);
