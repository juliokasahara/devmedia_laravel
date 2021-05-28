<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;

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
Route::post('/cliente/salvar', [ClienteController::class,'save'])->name('cliente.salvar');
Route::post('/cliente/salvar', [ClienteController::class,'save'])->name('cliente.salvar');

/* Route::get('/grupo', [GroupController::class,'index'])->name('grupo');
Route::get('/grupo/adicionar', [GroupController::class,'add'])->name('group.add');
Route::post('/grupo/salvar', [GroupController::class,'save'])->name('cliente.salvar');
Route::get('/grupo/editar/{id}', [GroupController::class,'edit'])->name('grupo.editar');
Route::put('/grupo/atualizar/{id}', [GroupController::class,'update'])->name('grupo.atualizar');
Route::get('/grupo/deletar/{id}', [GroupController::class,'delete'])->name('grupo.deletar');
Route::get('/grupo/detalhe/{id}', [GroupController::class,'detail'])->name('grupo.detalhe'); */