<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hello_world');
});

Route::get('/biodata', function () {
    return view('biodata');
});
