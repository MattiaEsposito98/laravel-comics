<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layouts/master');
});

Route::get('/pagina2', function () {
    $data = [1, 2, 3, 4, 5, 6, 7, 8];
    $persona1 = [
        'nome' => 'Mattia',
        'cognome' => 'Esposito',
        'eta' => 27,
    ];

    return view('pagina2', compact('data', 'persona1'));
})->name('pagina2');
