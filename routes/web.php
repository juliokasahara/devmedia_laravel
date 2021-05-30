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

    /* function Helpr */

/*     array_add()
	$array = ['nome'=>'Camila','idade'=>'20'];
	$array = array_add($array,'email','camila@mail.com');
	$array = array_add($array,'amigo','Guilherme');
	dd($array); */

/* 	array_collapse()
	$array = [['banana','limão'],['vermelho','azul']];
	$array = array_collapse($array);
	dd($array); */

/* 	array_divide()
	list($key,$value) = array_divide(['nome'=>'Camila','idade'=>'20']);
	dd($key,$value); */

/* 	array_except()
	$array = ['nome'=>'Camila','idade'=>'20'];
	$array = array_except($array,['nome']);
	dd($array); */

/* 	base_path()
	$path = base_path('Config');
	dd($path); */

/* 	database_path()
	$path = database_path();
	dd($path); */

/* 	public_path()
	$path = public_path();
	dd($path); */

/* 	storage_path()
	$path = storage_path();
	dd($path); */

/* 	camel_case()
	$text = "Guilherme esta criando uma nova aula";
	dd(camel_case($text)); */

/* 	snake_case()
	$text = "GuilhermeEstaCriandoUmaNovaAula";
	dd(snake_case($text)); */

/* 	str_limit()
	$text = "Guilherme esta criando uma nova aula";
	dd(str_limit($text,5)); */


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
