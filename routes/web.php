<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

modelo:
Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});

Route::get('/aluno/treino', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});

Route::get('/aluno/aulas', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});


Route::get('/academia', function () {
    return "<h1>tela de cadastro da academia</h1>";
});

Route::get('/academia/equipamentos', function () {
    return "<h1>tela de cadastro de equipamentos</h1>";
});

Route::get('/academia/treinos', function () {
    return "<h1>tela de cadastro de treinos</h1>";
});

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos/cadastrar', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});

Route::get('/aluno/treino', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});

Route::get('/aluno/aulas', function () {
    return "<h1>tela de cadastro do aluno</h1>";
});


Route::get('/academia', function () {
    return "<h1>tela de cadastro da academia</h1>";
});

Route::get('/academia/equipamentos', function () {
    return "<h1>tela de cadastro de equipamentos</h1>";
});

Route::get('/academia/treinos', function () {
    return "<h1>tela de cadastro de treinos</h1>";
});

Route::get('/nome/{nome}/{sobrenome}', function ($nome, $sn) {
    return "<h1>Ola, $nome $sn</h1>";
});

Route::get('/repetir/nome/{nome}/{n}', function ($nome, $n) {
    if (is_integer($n)) {
        for ($i = 0; $i < $n; $i++) {
            echo "<h1>Ola, $nome!</h1>";
        }
    }
    else
        echo "voce nao digitou um inteiro";
});

Route::get('/alunos', 'PessoasController@Index');
Route::get('/alunos/cadastrar', 'PessoasController@create');
Route::post('/alunos/cadastrar', 'PessoasController@store');


