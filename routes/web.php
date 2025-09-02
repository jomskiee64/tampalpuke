<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jomel', function () {
    return view('jomel');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/jomsresume', function () {
    return view('jomsresume');
});
Route::get('/about us', function () {
    return view('about us');
});
