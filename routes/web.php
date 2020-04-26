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
Route::get('/','ListingsController@index');
Route::get('/new', 'ListingsController@new')->name('new');
Route::post('/listings','ListingsController@store');
Route::get('/listingsedit/{listing_id}', 'ListingsController@edit');
Route::post('/listing/edit','ListingsController@update');
Route::get('/listingsdelete/{listing_id}', 'ListingsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
