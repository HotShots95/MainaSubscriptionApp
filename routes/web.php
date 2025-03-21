<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/payment', function () {
    return view('payment'); 
})->name('payment');

Route::get('/success', function () {
    return view('success'); // 
});

Route::get('/listener', function () {
    return view('listener'); 
});