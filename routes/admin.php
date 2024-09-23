<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RelationsController;
//use App\Http\Controllers\Admin\MessageController;

use App\Http\Controllers\Admin\ImageController;
use App\Models\Testimonial;

##) Admin dashboard
//Users
Route::group([
    'prefix' => '/admin/users', #for the uri
    'controller' => UserController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'users.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/', 'users')->name('list'); #we can basiclly remove the name to work with just the "as"
    Route::get('/add', 'create')->name('add');
    Route::post('', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
    Route::delete('/{id}', 'force_delete')->name('destroy');
});
//Topics
Route::group([
    'prefix' => '/admin/topics', #for the uri
    'controller' => TopicController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'topics.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/', 'topics')->name('list');
    Route::get('/details/{id}', 'show')->name('details');
    Route::get('/add', 'create')->name('add');
    Route::post('', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
    Route::delete('/{id}', 'force_delete')->name('destroy');
});
#<!------DB relations -- not needed only trait is enough-------¡>
// Route::get('1/many', [RelationsController::class, 'DBrelations'])->name('1toM')->middleware('verified');

//Categories
Route::group([
    'prefix' => '/admin/categories', #for the uri
    'controller' => CategoryController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'categories.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/', 'categories')->name('list');
    Route::get('/add', 'create')->name('add');
    Route::post('', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
    Route::delete('/{id}', 'force_delete')->name('destroy');
});
//Testimonials
Route::group([
    'prefix' => '/admin/testimonials', #for the uri
    'controller' => TestimonialController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'testimonials.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/', 'testimonials')->name('list');
    Route::get('/add', 'create')->name('add');
    Route::post('', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
    Route::delete('/{id}', 'force_delete')->name('destroy');
});
//Messages/contactus/mailing
Route::group([
    'prefix' => '/admin/messages', #for the uri
    'controller' => ContactController::class, #then we'll del the [] from the pages that open in browser
    'as' => 'messages.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/', 'messages')->name('list');
    Route::get('/details/{id}', 'show')->name('details');
    Route::delete('/{id}', 'force_delete')->name('destroy');
});

//uploadFile (e.g. image) not needed only trait is enough
// Route::post('upload/files', [ImageController::class, 'uploadFile'])->name('uploadFile')->middleware('verified');
#Route::post(uri: 'assets', [ImageController::class, 'uploadimg'])->name('uploadimg')->middleware('verified');

##) authentication
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
