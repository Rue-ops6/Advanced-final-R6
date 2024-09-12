<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\PublicController;

use App\Http\Controllers\admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ImageController;


Route::get('/', function () {

    return view('welcome');
});

/*#comment it until the project is done as it hides errors and bring us to home
Route::fallback(function () {
return redirect("/");
});
//anotherway
Route::fallback(fn() => redirect(""));
 */


//Public dashboard
Route::get('index', [PublicController::class, 'index'])->name('index');
Route::get('contact/us',[PublicController::class,'contactus'])->name('contactus');
Route::get('topics/details',[PublicController::class,'details'])->name('details');
Route::get('topics/listings',[PublicController::class,'listings'])->name('listings');

//Admin dashboard
Route::get('testimonials',[TestimonialController::class,'testimonials'])->name('testimonials');
Route::get('add/categories',[CategoryController::class,'add'])->name('add_categories');

//uploadFile (e.g. image)
Route::post('upload/files',[ImageController::class,'uploadFile'])->name('uploadFile');
