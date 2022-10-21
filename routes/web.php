<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ola ";
});

Route::get('/sobre-nos', function () {
    return "ola2 ";
});

Route::get('/contato', function () {
    return "ola3 ";
});
