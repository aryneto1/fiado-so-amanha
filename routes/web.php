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
    return view('listagem');
});

/*Route::get('/dashboard', function () {
    return view('cliente.index');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/listagem', [\App\Http\Controllers\ClienteController::class, 'index'])
    ->name('listagem');

Route::post('/listagem/adicionar', [\App\Http\Controllers\ClienteController::class, 'store'])
    ->name('adicionar');
Route::put('/listagem/adicionar', [\App\Http\Controllers\ClienteController::class, 'store']);

Route::post('/listagem/editar', [\App\Http\Controllers\ClienteController::class, 'show'])
    ->name('editar');

Route::get('/listagem/perfil/{id}', [\App\Http\Controllers\ClienteController::class, 'show'])
    ->name('perfil');

Route::delete('/listagem/excluir/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy']);

Route::get('/dividas', [\App\Http\Controllers\DividaController::class, 'index'])
    ->name('dividas');

Route::post('/dividas/adicionar', [\App\Http\Controllers\DividaController::class, 'store'])
    ->name('addDividas');
Route::put('/dividas/adicionar', [\App\Http\Controllers\DividaController::class, 'store']);

require __DIR__.'/auth.php';
