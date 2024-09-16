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

use App\Http\Controllers\Admin\ImageController;

##) Admin dashboard
Route::group([
    'prefix' => 'admin', #for the uri
    'controller' => AdminController::class, #then we'll del the [] from the pages that open in browser
    'middleware' => 'verified',
], function () {
    Route::get('/users', 'users')->name('users');
    Route::get('/add/user', 'add_user')->name('add_user');
    Route::get('/edit/user', 'edit_user')->name('edit_user');
    Route::get('/topics', 'topics')->name('topics');
    Route::get('/topic/details', 'topic_details')->name('topic_details');
    Route::get('/add/topic', 'add_topic')->name('add_topic');
    Route::get('/edit/topic', 'edit_topic')->name('edit_topic');
    Route::get('/categories', 'categories')->name('categories');
    Route::get('/add/category', 'add_category')->name('add_category');
    Route::get('/edit/category', 'edit_category')->name('edit_category');
    Route::get('/testimonials', 'testimonials')->name('testimonials');
    Route::get('/add/testimonial', 'add_testimonial')->name('add_testimonial');
    Route::get('/edit/testimonial', 'edit_testimonial')->name('edit_testimonial');
    Route::get('/messages', 'messages')->name('messages');
    Route::get('/message/details', 'msg_details')->name('msg_details');
});
//uploadFile (e.g. image)
Route::post('upload/files', [ImageController::class, 'uploadFile'])->name('uploadFile')->middleware('verified');
#Route::post(uri: 'assets', [ImageController::class, 'uploadimg'])->name('uploadimg')->middleware('verified');

#<!------DB relations-------¡>
#Route::get('one2one', [RelationController::class, 'DBrelations'])->name('1-1')->middleware('verified');

##) authentication
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
