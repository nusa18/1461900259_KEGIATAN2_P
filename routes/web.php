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

Route::get('/anggota','App\Http\Controllers\AnggotaController@index');
Route::get('/join','App\Http\Controllers\JoinController@index');
Route::get('/likejoin','App\Http\Controllers\LikeJoinController@index');
Route::get('/like','App\Http\Controllers\LikeController@index');
