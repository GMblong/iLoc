<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest/home/index');
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

Route::get('/destinations', function () {
    return view('guest/city/destinations/index');
});

Route::get('/about', function () {
    return view('guest/about/index');
});

Route::get('/contact', function () {
    return view('guest/contact/index');
});