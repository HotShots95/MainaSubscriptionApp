<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/payment', function () {
    return view('payment'); 
})->name('payment');

Route::get('/success', function () {
    return view('success'); // Create a success page
});