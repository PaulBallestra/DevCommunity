<?php

use Illuminate\Support\Facades\Route;

//WELCOME PAGE
Route::get('/', function () {
    return view('welcome');
});

//LOGIN


//SIGN UP
Route::get('/sign-up', function() {
    return view('signup');
});

//TIMELINE
Route::middleware('auth:sanctum')->get('/timeline', function() {
    return view('timeline');
});
