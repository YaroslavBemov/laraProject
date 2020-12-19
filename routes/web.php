<?php

use App\Http\Controllers\NewsController;
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
    return view('app');
});

Route::view('/about', 'pages.about');

Route::view('/welcome', 'pages.welcome');

Route::get('/news', [NewsController::class, 'showAllNews']);

Route::get('/news/{id}', [NewsController::class, 'showOneNews']);
