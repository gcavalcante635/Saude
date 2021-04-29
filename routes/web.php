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
Route::post ('/resultadoCentro', 'App\Http\Controllers\CentroController@resultadoCentro')->name('resultadoCentro');
// routes de listas
Route::get ('/listaMedico', 'App\Http\Controllers\MedicoController@listaMedico')->name('listaMedico');
Route::get ('/listaMedicoAdm', 'App\Http\Controllers\MedicoController@listaMedicoAdm')->name('listaMedicoAdm');
Route::get ('/listaCentro', 'App\Http\Controllers\CentroController@listacentro')->name('listaCentro');
Route::get ('/listaCentroAdm', 'App\Http\Controllers\CentroController@listaCentroAdm')->name('listaCentroAdm');
Route::get ('/listaConsultaAdm', 'App\Http\Controllers\ConsultaController@listaConsultaAdm')->name('listaConsultaAdm');
Route::get ('/listaPlantaoAdm', 'App\Http\Controllers\PlantaoController@listaPlantaoAdm')->name('listaPlantaoAdm');
// routes de edicao
Route::get ('/editarMedico/{id}', 'App\Http\Controllers\MedicoController@editarMedico')->name('editarMedico');
Route::post ('/edicaoMedico', 'App\Http\Controllers\MedicoController@edicaoMedico')->name('edicaoMedico');
Route::get ('/editarCentro', 'App\Http\Controllers\CentroController@editarCentro')->name('editarCentro');
Route::post ('/edicaoCentro', 'App\Http\Controllers\CentroController@edicaoCentro')->name('edicaoCentro');
Route::get ('/editarConsulta', 'App\Http\Controllers\ConsultaController@editarConsulta')->name('editarConsulta');
Route::post ('/edicaoConsulta', 'App\Http\Controllers\ConsultaController@edicaoConsulta')->name('edicaoConsulta');
Route::get ('/editarPlantao', 'App\Http\Controllers\PlantaoController@editarPlantao')->name('editarPlantao');
Route::post ('/edicaoPlantao', 'App\Http\Controllers\PlantaoController@edicaoPlantao')->name('edicaoPlantao');
// routes de excluir 
Route::get ('/excluirMedico/{id}', 'App\Http\Controllers\MedicoController@excluirMedico')->name('excluirMedico');
Route::get ('/excluirCentro/{id}', 'App\Http\Controllers\CentroController@excluirCentro')->name('excluirCentro');
Route::get ('/excluirConsulta/{id}', 'App\Http\Controllers\ConsultaController@excluirConsulta')->name('excluirConsulta');
Route::get ('/excluirPlantao/{id}', 'App\Http\Controllers\PlantaoController@excluirPlantao')->name('excluirPlantao');