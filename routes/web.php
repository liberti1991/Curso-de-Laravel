<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');

Route::get('/sobreNos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
