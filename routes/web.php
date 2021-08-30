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




Auth::routes();

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::any('/register', function() {
    abort(404);
});

Route::get('/categories', function () {
    return redirect('/blog');
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


Route::get('/', 'App\Http\Controllers\FrontController@index')->name('home');

//service category

Route::get('/service', 'App\Http\Controllers\FrontController@services')->name('service.frontend');

Route::get('service/{slug}','App\Http\Controllers\FrontController@serviceSingle')->name('service.single');

//blog
Route::get('blog/search/', 'App\Http\Controllers\FrontController@searchBlog')->name('searchBlog');

Route::get('blog/{slug}','App\Http\Controllers\FrontController@blogSingle')->name('blog.single');
Route::get('/blog/categories/{slug}', 'App\Http\Controllers\FrontController@blogCategories')->name('blog.category');
Route::get('/blog', 'App\Http\Controllers\FrontController@blogs')->name('blog.frontend');
//end blog



Route::group(['prefix' => 'auth', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //signed-in user routes
    Route::get('/profile', 'App\Http\Controllers\UserController@profile')->name('profile');
    Route::put('/profile/{id}/update', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::put('/profileimage/{id}/update', 'App\Http\Controllers\UserController@imageupdate')->name('user.imageupdate');
    Route::put('/profile/password', 'App\Http\Controllers\UserController@profilepassword')->name('user.password');
    //end of signed-in user routes


    //General setting
    Route::get('/settings', 'App\Http\Controllers\SettingController@index')->name('setting.index');
    Route::post('/settings', 'App\Http\Controllers\SettingController@store')->name('setting.store');
    Route::put('/settings/{id}', 'App\Http\Controllers\SettingController@update')->name('setting.update');
    Route::put('/setting/{id}/images', 'App\Http\Controllers\SettingController@imageupdate')->name('setting.imageupdate');
    //End of General setting

    //Blog categories

    Route::get('/blog-category', 'App\Http\Controllers\BlogCategoryController@index')->name('blogcategory.index');
    Route::get('/blog-category/create', 'App\Http\Controllers\BlogCategoryController@create')->name('blogcategory.create');
    Route::post('/blog-category', 'App\Http\Controllers\BlogCategoryController@store')->name('blogcategory.store');
    Route::put('/blog-category/{category}', 'App\Http\Controllers\BlogCategoryController@update')->name('blogcategory.update');
    Route::delete('/blog-category/{category}', 'App\Http\Controllers\BlogCategoryController@destroy')->name('blogcategory.destroy');
    Route::get('/blog-category/{category}/edit', 'App\Http\Controllers\BlogCategoryController@edit')->name('blogcategory.edit');

    //End of Blog categories


    //blog

    Route::get('/blogs', 'App\Http\Controllers\BlogController@index')->name('blog.index');
    Route::get('/blogs/create', 'App\Http\Controllers\BlogController@create')->name('blog.create');
    Route::post('/blogs', 'App\Http\Controllers\BlogController@store')->name('blog.store');
    Route::put('/blogs/{blogs}', 'App\Http\Controllers\BlogController@update')->name('blog.update');
    Route::delete('/blogs/{blogs}', 'App\Http\Controllers\BlogController@destroy')->name('blog.destroy');
    Route::get('/blogs/{blogs}/edit', 'App\Http\Controllers\BlogController@edit')->name('blog.edit');
    Route::patch('/blogs/{id}/update', 'App\Http\Controllers\BlogController@updateStatus')->name('blog-status.update');

    //End blog

    //sliders

    Route::get('/sliders', 'App\Http\Controllers\SliderController@index')->name('sliders.index');
    Route::get('/sliders/create', 'App\Http\Controllers\SliderController@create')->name('sliders.create');
    Route::post('/sliders', 'App\Http\Controllers\SliderController@store')->name('sliders.store');
    Route::put('/sliders/{sliders}', 'App\Http\Controllers\SliderController@update')->name('sliders.update');
    Route::delete('/sliders/{sliders}', 'App\Http\Controllers\SliderController@destroy')->name('sliders.destroy');
    Route::get('/sliders/{sliders}/edit', 'App\Http\Controllers\SliderController@edit')->name('sliders.edit');
    Route::patch('/sliders/{id}/update', 'App\Http\Controllers\SliderController@updateStatus')->name('sliders-status.update');

    //End sliders

    //service category

    Route::get('/service-category', 'App\Http\Controllers\ServiceCategoryController@index')->name('service-category.index');
    Route::get('/service-category/create', 'App\Http\Controllers\ServiceCategoryController@create')->name('service-category.create');
    Route::post('/service-category', 'App\Http\Controllers\ServiceCategoryController@store')->name('service-category.store');
    Route::put('/service-category/{sliders}', 'App\Http\Controllers\ServiceCategoryController@update')->name('service-category.update');
    Route::delete('/service-category/{sliders}', 'App\Http\Controllers\ServiceCategoryController@destroy')->name('service-category.destroy');
    Route::get('/service-category/{sliders}/edit', 'App\Http\Controllers\ServiceCategoryController@edit')->name('service-category.edit');

    //End of service category

});
