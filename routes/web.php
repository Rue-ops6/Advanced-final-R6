<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Public\PublicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ImageController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SocialMedia;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;

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

 //Registration
Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// Route::post('/logged', function () {
//     return view(view: 'home');
// })->name('logged');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); // Show the login form
Route::post('logged', [LoginController::class, 'login'])->name('logged'); // Handle the login form submission
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


#<!------Socialmedia login-------¡>
Route::get('auth/github/redirect', [SocialMedia::class, 'redirect'])->name('sociallogin');;
Route::get('auth/github/callback', [SocialMedia::class, 'callback'])->name('callback');;


##) Public dashboard
Route::get('index', [PublicController::class, 'index'])->name('index');
Route::get('contact/us', [PublicController::class, 'contactus'])->name('contactus');
Route::get('topics/details', [PublicController::class, 'details'])->name('details');
Route::get('topics/listings', [PublicController::class, 'listings'])->name('listings');
Route::get('all/testimonials', [TestimonialController::class, 'allTestimonials'])->name('allTestimonials');



#<!------DB relations-------¡>
#Route::get('one2one', [RelationController::class, 'DBrelations'])->name('1-1')->middleware('verified');

#<!------Mailing-------¡>
//Route::get('contactus', [ContactController::class, 'sendFrom'])->name('sendFrom');
//Route::post('contactus', [ContactController::class, 'sendTo'])->name('sendTo');
Route::get('contact-us', [ContactController::class, 'contactForm'])->name('contactForm');
Route::post('contact-us', [ContactController::class, 'sendEmail'])->name('sendEmail');


##) authentication
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
