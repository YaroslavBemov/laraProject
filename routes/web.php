<?php

use App\Http\Controllers\{NewsController, FeedbackController, AdminNewsController};
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
    'prefix' => 'news',
    'as' => 'news::'
],
    function () {
        Route::get('/', [NewsController::class, 'showAllNews'])->name('all');

        Route::get('/{id}', [NewsController::class, 'showOneNews'])->name('one');

        Route::get('/category/{categoryId}', [NewsController::class, 'showByCategory'])->name('byCategory');
    }
);

Route::group([
    'prefix' => 'admin/news',
    'as' => 'admin::news::'
],
    function () {
        Route::get('/', [AdminNewsController::class, 'index'])->name('index');

        Route::get('/create', [AdminNewsController::class, 'createNews'])->name('create');

        Route::post('/store',[AdminNewsController::class, 'storeNews'])->name('store');

        Route::get('/edit/{id}',[AdminNewsController::class, 'updateNews'])->name('update');

        Route::get('/delete/{id}', [AdminNewsController::class, 'deleteNews'])->name('delete');
    }
);

Route::post('/feedback', [FeedbackController::class, 'getFeedback'])->name('feedback');
