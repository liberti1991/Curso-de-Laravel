<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobreNos', 'SobreNosController@sobreNos')->name('site.sobreNos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'rota 1';
})->name('site.rota1');


Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function () {
    echo 'A rota acessada não existe <a href="' . route('site.index') . '">Click aqui</a> para  ir para página inicial';
});

// Route::redirect('/rota2','/rota1');





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
