<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::prefix('dashboard')->name('dashboard.')->group(function (){
        Route::get('index' , 'DashboardController@index')->name('index');

        // user route
        Route::resource('users', 'UserController');

    });
});

