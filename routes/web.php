<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/timeline', function () {
    return view('timeline');
})->middleware(['auth'])->name('timeline');

require __DIR__.'/auth.php';
