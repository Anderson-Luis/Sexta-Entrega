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

use App\Http\Controllers\ListaController;

Route::get('/', [ListaController::class, 'index']);
Route::post('/views', [ListaController::class, 'store']);
Route::get('/consulta.blade.php', [ListaController::class, 'consulta'])->name('consulta');
//Route::post('/consulta.blade.php/{id}', [ListaController::class, 'edit'])->name('edit');
Route::get('/editar.blade.php/{id}',  [ListaController::class, 'editar'])->name('editar');
Route::post('/editar.blade.php/{id}', [ListaController::class, 'update'])->name('update');
Route::delete('consultar.blade.php/{id}', [ListaController::class, 'deletar'])->name('deletar');