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
    Route::post('/kontakt', 'sendContact')->name('contact.send');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/clearcache', function () {
    // Utworzenie symbolic linku dla storage
    Artisan::call('storage:link');

    // Czyszczenie cache aplikacji
    Artisan::call('cache:clear');

    // Czyszczenie cache konfiguracji
    Artisan::call('config:clear');

    // Czyszczenie cache widoków
    Artisan::call('view:clear');

    // Czyszczenie cache routingu
    Artisan::call('route:clear');

    return 'Cache został wyczyszczony, a link do storage utworzony!';
});
