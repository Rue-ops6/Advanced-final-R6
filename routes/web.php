<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Public\IndexController;
use App\Http\Controllers\Public\SidePagesController;
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

#<!------Registration-------¡>
/*Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); // Show the login form
Route::post('logged', [LoginController::class, 'login'])->name('logged'); // Handle the login form submission  */
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
#<!------Socialmedia login-------¡>
Route::group([
    'prefix' => '/auth/redirect', #for the uri
    'controller' => SocialMedia::class, #then we'll del the [] from the pages that open in browser
    'as' => 'redirect.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/google', 'Googleredirect')->name('google');
    Route::get('/github', 'Gitredirect')->name('git');
    Route::get('/linkedin', 'Linkedredirect')->name('linked');
});
Route::group([
    'prefix' => '/auth/callback', #for the uri
    'controller' => SocialMedia::class, #then we'll del the [] from the pages that open in browser
    'as' => 'callback.', #for the name
    'middleware' => 'verified',
], function () {
    Route::get('/google', 'Googlecallback')->name('google');
    Route::get('/github', 'Gitcallback')->name('git');
    Route::get('/linkedin', 'Linkedcallback')->name('linked');
});

#<!------Public dashboard-------¡>
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/search', [IndexController::class, 'search'])->name('search');
Route::post('index/trendings/{id}', [IndexController::class, 'trendings'])->name('trendings');
Route::get('/topics/listings', [SidePagesController::class, 'listings'])->name('listings');
Route::get('/all/testimonials', [SidePagesController::class, 'allTestimonials'])->name('allTestimonials');

#<!------Mailing-------¡>
//mailing/messages/contactus
Route::get('/contact/us/form', [ContactController::class, 'contactForm'])->name('contactus');
Route::post('/receive/ur/email', [ContactController::class, 'contactEmail'])->name('contactEmail');
//quoting mailable
Route::get('/topics/details/{id}', [SidePagesController::class, 'details'])->name('details');
Route::post('/Newsletter', [ContactController::class, 'MailQuoting'])->name('MailQuoting');

##) authentication
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
