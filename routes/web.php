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

Route::get('/main', function () {
    return view('main');
});

Route::get('/help', function () {
    return view('help_page');
});

Route::get('/privacy', function () {
    return view('privacy-policy');
});

Route::get('/map', function () {
    return view('mapservice');
});

Route::get('/volkswagenauto', function () {
    return view('lk_page/volkswagenauto');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/asago', function () {
    return view('lk_page/lk_asago');
});

Route::get('/generat', function () {
    return view('lk_page/lk_generat');
});

Route::get('/good', function () {
    return view('lk_page/lk_good');
});

Route::get('/six', function () {
    return view('lk_page/lk_six');
});

Route::get('/sput', function () {
    return view('lk_page/lk_sputnik');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/app', [\App\Http\Controllers\AppController::class, 'index'])->name('app.index');
Route::get('app/create', [\App\Http\Controllers\AppController::class, 'create'])->name('app.create');
Route::post('app/store', [\App\Http\Controllers\AppController::class, 'store'])->name('app.store');
Route::get('app/edit/{id}', [\App\Http\Controllers\AppController::class, 'edit'])->name('app.edit');
Route::get('app/destroy/{id}', [\App\Http\Controllers\AppController::class, 'destroy'])->name('app.destroy');
Route::post('app/update', [\App\Http\Controllers\AppController::class, 'update'])->name('app.update');
Route::get('app/show/{id}', [\App\Http\Controllers\AppController::class, 'show'])->name('app.show');
