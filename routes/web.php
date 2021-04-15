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

// routes do administrador
Route::get ('/tela-de-administrador', 'App\Http\Controllers\SaudeController@administrador')->name('telaAdministrador');
Route::get ('/medico', 'App\Http\Controllers\MedicoController@carregarMedico')->name('medico');
Route::get ('/consulta', 'App\Http\Controllers\ConsultaController@carregarConsulta')->name('consulta');
Route::get ('/plantao', 'App\Http\Controllers\PlantaoController@carregarPlantao')->name('plantao');
// routes de resultados
Route::post ('/resultadoMedico', 'App\Http\Controllers\MedicoController@resultadoMedico')->name('resultadoMedico');
Route::post ('/resultadoConsulta', 'App\Http\Controllers\ConsultaController@resultadoConsulta')->name('resultadoConsulta');
Route::post ('/resultadoPlantao', 'App\Http\Controllers\PlantaoController@resultadoPlantao')->name('resultadoPlantao');
// routes de listas
Route::get ('/listaMedico', 'App\Http\Controllers\MedicoController@listaMedico')->name('listaMedico');
Route::get ('/listaCentro', 'App\Http\Controllers\CentroController@listacentro')->name('listaCentro');
// routes de edicao
Route::get ('/editarMedico', 'App\Http\Controllers\MedicoController@editarMedico')->name('editarMedico');
Route::get ('/editarCentro', 'App\Http\Controllers\CentroController@editarCentro')->name('editarCentro');