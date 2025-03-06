<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('./partials.jumbotron', compact('comics'));
});

Route::get('/pagina2', function () {
    $data = [1, 2, 3, 4, 5, 6, 7, 8];
    $persona1 = [
        'nome' => 'Mattia',
        'cognome' => 'Esposito',
        'eta' => 27,
    ];

    return view('./partials.pagina2', compact('data', 'persona1'));
})->name('pagina2');

// Rotte per i link
Route::get('/characters', function () {
    return 'CHARACTERS';
})->name('characters');


Route::get('/movies', function () {
    return 'MOVIES';
})->name('movies');

Route::get('/tv', function () {
    return 'TV';
})->name('tv');

Route::get('/games', function () {
    return 'GAMES';
})->name('games');

Route::get('/collectibles', function () {
    return 'COLLECTIBLES';
})->name('collectibles');

Route::get('/videos', function () {
    return 'VIDEOS';
})->name('videos');

Route::get('/fans', function () {
    return 'FANS';
})->name('fans');

Route::get('/news', function () {
    return 'NEWS';
})->name('news');

Route::get('/shop', function () {
    return 'SHOP';
})->name('shop');
