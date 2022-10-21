<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');

Route::get('/sobreNos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

// Route::get('/contato/{nome}', function (string $nome) {
//     echo 'Estamos aqui ' . $nome;
// });

Route::get('/contato/{nome}/{sobrenome}/{idade?}', function (string $nome, string $sobrenome, int $idade = 01) {
    // echo 'Estamos aqui ' . $nome . ' ' . $sobrenome;
    echo "Estamos aqui  $nome  $sobrenome $idade";
});


// php artisan serve
