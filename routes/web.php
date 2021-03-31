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

Route::get ('/', 'App\Http\Controllers\SaudeController@welcome')->name('welcome');

Route::get ('/sobre', 'App\Http\Controllers\SaudeController@sobre')->name('carregarSobre');
Route::get ('/login', 'App\Http\Controllers\SaudeController@login')->name('carregarLogin');
Route::get ('/cadastro', 'App\Http\Controllers\SaudeController@cadastro')->name('carregarCadastro');
Route::get ('/recuperar-senha', 'App\Http\Controllers\SaudeController@recuperarSenha')->name('carregarRecuperação');
