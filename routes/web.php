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
    return view('welcome');
});

Route::get('/hw',function (){
	return 'Roberto Diener';
});


Route::get('/cliente/{id}',function ($id){
	return 'Roberto Diener ' . $id;
});

Route::get('/clientes/{id}/{nome}',function ($id, $nome){
	return "Cliente $nome, id  $id";
});


Route::get('/clientes2/{id}/{nome?}',function ($id, $nome="Flamengo"){
	return view('cliente-view')
		->with('id',$id)
		->with('nome',$nome);
});



