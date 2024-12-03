<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tampilanawal', function () {
    return view('tampilanawal');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mywarnet', function () {
    return view('mywarnet');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/logout', function () {
    return view('logout');
});