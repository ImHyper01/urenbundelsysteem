<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uren', function(){
    return view('components/uren');
});

Route::get('/klanten', function(){
    return view('components/klanten');
});

Route::get('/profiel', function(){
    return view('components/profiel');
});