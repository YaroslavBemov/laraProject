<?php

use App\Http\Controllers\{NewsController, FeedbackController};
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
})->name('home');

Route::view('/about', 'static.about')
    ->name('about');

Route::group([
//    'prefix' => 'news',
    'as' => 'news::'
],
    function () {
        Route::get('/news', [NewsController::class, 'showAllNews'])->name('all');

        Route::get('/news/{id}', [NewsController::class, 'showOneNews'])->name('one');

        Route::get('/news/category/{categoryId}', [NewsController::class, 'showByCategory'])->name('byCategory');
    }
);

Route::post('/feedback', [FeedbackController::class, 'getFeedback'])->name('feedback');
