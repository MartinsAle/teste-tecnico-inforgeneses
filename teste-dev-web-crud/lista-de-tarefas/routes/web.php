<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get('/', function () {
return view('index');
})->name('home');

Route::get('/tarefas', [App\Http\Controllers\TarefasController::class, 'index'])->name('tarefas');
Route::get('/tarefas/novo', [App\Http\Controllers\TarefasController::class, 'create'])->name('cadastrar');
Route::post('/tarefas/cadastrarTarefa', [App\Http\Controllers\TarefasController::class, 'store'])->name('cadastrarTarefa');
Route::get('/tarefas/editar/{id}', [App\Http\Controllers\TarefasController::class, 'edit'])->name('editarTarefa');
Route::post('/tarefas/atualizar/{id}', [App\Http\Controllers\TarefasController::class, 'update'])->name('atualizarTarefa');
Route::get('/tarefas/excluir/{id}', [App\Http\Controllers\TarefasController::class, 'destroy'])->name('excluir');
