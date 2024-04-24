<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', 'PrincipalController@pricipal') ->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@pricipal') ->name('site.sobrenos');
Route::get('/fornecedor', 'FornecedorController@pricipal') ->name('site.fornecedor');
Route::get('contato', 'ContaoController@pricipal') ->name('site.contato');
Route::get('/login', function(){return 'Login';}) ->name('site.login');

Route::prefix('/app')-> group(function(){
    Route::get('/clientes', function(){return 'Cientes';})->name('app.clientes');
    Route::get('/fornecedores','FornecedorContreller@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a pagina inicial.';
});