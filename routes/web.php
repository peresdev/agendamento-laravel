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
*/

Route::get('/', function () {
    return view('layout/principal');
});

Route::get('/pacientes', 'PacienteController@lista');
Route::get('/pacientes/mostra/{id?}', 'PacienteController@mostra')->where('id', '[0-9]+');
Route::get('/pacientes/novo', 'PacienteController@novo');
Route::post('/pacientes/adiciona', 'PacienteController@adiciona');
Route::get('/pacientes/remove/{id}', 'PacienteController@remove');

Route::get('/medicos', 'MedicoController@lista');
Route::get('/medicos/mostra/{id?}', 'MedicoController@mostra')->where('id', '[0-9]+');
Route::get('/medicos/novo', 'MedicoController@novo');
Route::post('/medicos/adiciona', 'MedicoController@adiciona');
Route::get('/medicos/api', 'MedicoController@listaJson');
Route::get('/medicos/remove/{id}', 'MedicoController@remove');

Route::get('/usuarios', 'UsuarioController@lista');
Route::get('/usuarios/mostra/{id?}', 'UsuarioController@mostra')->where('id', '[0-9]+');
Route::get('/usuarios/novo', 'UsuarioController@novo');
Route::post('/usuarios/adiciona', 'UsuarioController@adiciona');
Route::get('/usuarios/remove/{id}', 'UsuarioController@remove');

Route::get('/agendamentos', 'AgendamentoController@lista');
Route::get('/agendamentos/mostra/{id?}', 'AgendamentoController@mostra')->where('id', '[0-9]+');
Route::get('/agendamentos/novo', 'AgendamentoController@novo');
Route::post('/agendamentos/adiciona', 'AgendamentoController@adiciona');
Route::get('/agendamentos/remove/{id}', 'AgendamentoController@remove');