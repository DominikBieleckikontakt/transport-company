<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::post('/kontakt', 'contact')->name('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
