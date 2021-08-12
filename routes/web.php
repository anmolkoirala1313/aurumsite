<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('frontend.pages.aboutus');
});

Route::get('/team', function () {
    return view('frontend.pages.team');
});

Route::get('/service', function () {
    return view('frontend.pages.service');
});
Route::get('/process', function () {
    return view('frontend.pages.process');
});

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
});

Auth::routes();

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['prefix' => 'auth', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', 'App\Http\Controllers\UserController@profile')->name('profile');

});
