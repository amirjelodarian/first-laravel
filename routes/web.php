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
//Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// register
Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register','Auth\RegisterController@register')->name('register.store');
///////////

// login logout
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login')->name('login.store');
///////////////

// forget password
Route::get('forgetPassword', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgetPasswordForm');
Route::post('forgetPassword', 'Auth\ForgotPasswordController@sendResetCodePhone')->name('forgetPassword')->middleware('throttle:2,1');
Route::post('forgetPasswordConfirmCode', 'Auth\ForgotPasswordController@forgetPasswordConfirmCode');
Route::post('changePassword', 'Auth\ForgotPasswordController@changePassword');
//////////////////


Route::group(['middleware' => 'notVerified'],function (){
    Route::get('verify', 'Auth\VerificationController@show')->name('verifyShow');
    Route::post('verify', 'Auth\VerificationController@verifyMobile')->name('verify');
    Route::post('getNewCode', 'Auth\VerificationController@getNewCode')->name('getNewCodeVerify')->middleware('throttle:2,1');
});

// blog

Route::group(['prefix' => 'blog'],function (){
    Route::get('/','BlogController@index')->name('blog');
    Route::get('id/{id}','BlogController@show')->name('more-blog');
    Route::group(['middleware' => 'administratorUser','middleware' => 'auth'],function (){
        Route::get('add','BlogController@create')->name('add-blog');
        Route::post('add','BlogController@store')->name('add-post');
        Route::post('editBlogTitle','BlogController@editBlogTitle')->name('edit-blog-title');
        Route::post('editBlogBody','BlogController@editBlogBody')->name('edit-blog-body');
    });
});
///////
Route::get('home','HomeController@index')->name('home')->middleware('verified');
