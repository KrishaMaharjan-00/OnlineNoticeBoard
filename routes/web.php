<?php

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
    return view('layout.app');
});

Route::get('/pages', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'ContactController@displayContact');
Route::get('/contact/callme', 'ContactController@displayCallme');


//nested routing problem, solution = group

Route::group(['prefix' => 'profile'],function(){
    Route::get('/', 'ProfileController@getProfileData');
    
    Route::group(['prefix' => 'about'], function(){
        Route::get('/', 'ProfileController@getProfileAboutData');
        
        Route::group(['prefix'=> 'skills'], function(){
            Route::get('/', 'ProfileController@getProfileSkillsData');
            Route::get('/laravel', 'ProfileController@getLaravelSkill')->name('showLaravelSkill');
            Route::get('/angular', 'ProfileController@getAngularSkill')->name('showAngularSkill');
            Route::get('/reactjs', 'ProfileController@getProfileData');
        });
    });
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('', 'DashboardController@showDashboard');
    
    Route::group(['prefix' => 'users'], function(){
        Route::get('', 'DashboardController@showUsers');
        Route::get('/add-user', 'DashboardController@addUser');
        
        Route::group(['prefix' => 'edit'], function(){
            Route::get('', 'DashboardController@editUser');
            Route::get('/user-detail', 'DashboardController@editUserDetail')->name('edituserdetail');
            Route::get('/user-type', 'DashboardController@editUserType');
        });
    });
});






