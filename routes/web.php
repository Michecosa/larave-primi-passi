<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = "Sono la pagina di Homepage";
    return view('home', compact("data"));
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
