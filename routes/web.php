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

/*Route::get('/dashboard', function () {
    return view('cliente.index');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard', [\App\Http\Controllers\ClienteController::class, 'index'])
    ->name('dashboard');

require __DIR__.'/auth.php';