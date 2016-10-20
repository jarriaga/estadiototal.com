<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/** Routes for Logged in users ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile/{name}/{id}/edit','Profile\\UserProfileController@editUserProfile')->name('editUserProfile');
    Route::post('/profile/user/update','Profile\\UserProfileController@postUpdateProfile')->name('postUpdateProfile');
    Route::get('/home','HomeController@index')->name('home');
});



Route::group(['middleware'=>'guest'],function(){
    Route::get('/',function(){
        return view('welcome');
    });
    Route::get('/auth/facebook/','AuthFacebookController@redirectToProvider')->name('facebookLogin');
    Route::get('/auth/facebook/callback','AuthFacebookController@handleProviderCallback')->name('facebookCallback');
    Route::get('/auth/facebook/email','AuthFacebookController@facebookUpdateEmail')->name('facebookUpdateEmail');
    Route::post('/auth/facebook/email','AuthFacebookController@facebookUpdateEmailPost')->name('facebookUpdateEmailPost');
});

Route::get('/profile/{name}/{id}','Profile\\UserProfileController@getUserProfile')->name('getUserProfile');

Auth::routes();

