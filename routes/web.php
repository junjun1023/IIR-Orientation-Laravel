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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/rating/insert/', 'TableController@insertRatingWithModel');
Route::post('/rating/delete/', 'TableController@deleteRatingWithModel');
Route::post('/', 'TableController@selectMovieByIdWithResource');
Route::get('/', 'TableController@selectMovieByIdWithResource');
//Route::post('/rating/update', 'TableController@updateRatingWithModel');

