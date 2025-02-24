<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('guest/home/index');
});

Route::get('/city', function () {
    return view('guest/city/index');
});

Route::get('/tour', function () {
    return view('guest/city/packages/index');
});