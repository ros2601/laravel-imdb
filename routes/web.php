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
    return view('home');
});
Route::get('/',"App\Http\controllers\homecontroller@home");
Route::post('/search',"App\Http\Controllers\searchcontroller@search");
Route::get('show/{id}',"App\Http\controllers\searchcontroller@show");
