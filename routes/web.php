<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');

Route::get('/sobreNos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

// Route::get('/contato/{nome}', function (string $nome) {
//     echo 'Estamos aqui ' . $nome;
// });

Route::get('/contato/{nome}/{sobrenome}', function (string $nome, string $sobrenome) {
    echo 'Estamos aqui ' . $nome . ' ' . $sobrenome;
});
