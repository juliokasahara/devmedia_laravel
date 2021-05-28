<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TelefoneController;

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

Auth::routes();

Route::get('/cliente', [ClienteController::class, 'index'])->name('home');
Route::get('/cliente/adicionar', [ClienteController::class,'adicionar'])->name('cliente.adicionar');
Route::post('/cliente/salvar', [ClienteController::class,'salvar'])->name('cliente.salvar');
Route::get('/cliente/editar/{id}', [ClienteController::class,'editar'])->name('cliente.editar');
Route::put('/cliente/atualizar/{id}', [ClienteController::class,'atualizar'])->name('cliente.atualizar');
Route::get('/cliente/deletar/{id}', [ClienteController::class,'deleter'])->name('cliente.deletar');
Route::get('/cliente/detalhe/{id}', [ClienteController::class,'detalhe'])->name('cliente.detalhe');

Route::get('/telefone/adicionar/{id}', [TelefoneController::class,'adicionar'])->name('telefone.adicionar');
Route::post('/telefone/salvar/{id}', [TelefoneController::class,'salvar'])->name('telefone.salvar');
Route::get('/telefone/editar/{id}', [TelefoneController::class,'editar'])->name('telefone.editar');
Route::put('/telefone/atualizar/{id}', [TelefoneController::class,'atualizar'])->name('telefone.atualizar');
Route::get('/telefone/deletar/{id}', [TelefoneController::class,'deleter'])->name('telefone.deletar');
