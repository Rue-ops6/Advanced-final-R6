<?php

use App\Http\Controllers\PublicController;

use App\Http\Controllers\Admin\TestimonialController;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
Route::get('index',[PublicController::class,'index'])->name('index');
/*Route::get('about',[PublicController::class,'about'])->name('about');

Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('topic/detail',[PublicController::class,'jobDetail'])->name('detail');
Route::get('topic/list',[PublicController::class,'jobList'])->name('job-list');

/*Mailer
Route::get('contact/us',[PublicController::class,'contactFrom'])->name('contactFrom');
Route::get('contact/us',[PublicController::class,'sendTo'])->name('sendTo');


#
Route::get('topic-list',[PublicController::class,'jobList'])->name('job-list');
Route::get('topics',[PublicController::class,'jobs'])->name('jobs');

Route::get('testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');
*/

