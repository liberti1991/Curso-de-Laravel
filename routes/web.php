<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');

Route::get('/sobreNos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/login', function () {
    return 'Login';
});

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function () {
        return 'Clientes';
    });

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    });

    Route::get('/produtos', function () {
        return 'Produtos';
    });
});

// Route::get('/contato/{nome}', function (string $nome) {
//     echo 'Estamos aqui ' . $nome;
// });

// Route::get('/contato/{nome}/{sobrenome}/{idade?}', function (string $nome, string $sobrenome, int $idade = 01) {
//     // echo 'Estamos aqui ' . $nome . ' ' . $sobrenome;
//     echo "Estamos aqui  $nome  $sobrenome $idade";
// });

// Route::get('/contato/{nome}/{category_id}', function (
//     string $nome = 'desconhecido',
//     int $category_id = 1
// ) {
//     echo "Estamos aqui  $nome  $category_id";
// })->where('category_id', '[0-9]+')->where('nome','[A-Za-z]+');

// php artisan serve

//php artisan route:list
