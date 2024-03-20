<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "Olá";
});

Route::resource('/eixo', 'App\Http\Controllers\EixoController');
Route::resource('/curso', 'App\Http\Controllers\CursoController');
Route::resource('/turma', 'App\Http\Controllers\TurmaController');
Route::resource('/categoria', 'App\Http\Controllers\CategoriaController');
Route::resource('/usuario', 'App\Http\Controllers\UserController');
Route::resource('/comprovante', 'App\Http\Controllers\ComprovanteController');
Route::resource('/declaracao', 'App\Http\Controllers\DeclaracaoController');
Route::resource('/aluno', 'App\Http\Controllers\AlunoController');
