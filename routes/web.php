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

<<<<<<< HEAD
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');

=======
Route::get('/', function () {
    return view('dashboard.index');
>>>>>>> 5f9f7a55ae46dccc2d66406826e376cb6bb4cbf5
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@index')->name('home');
Route::get('/updatelatest', 'HomeController@index')->name('home');
