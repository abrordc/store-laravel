<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store', ['title' => 'Home']);
});



Route::get('/checkout', function () {
    return view('checkout', ['title' => 'checkout', 'data' => ["baju", "celana", "sepatu", "kemeja"]]);
});
