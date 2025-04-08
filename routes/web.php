<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\Htmlcontroller;
use App\Http\Controllers\LatihanController;
use Monolog\Handler\LogmaticHandler;


Route::get('/hello', function () {
    return view('hello_world');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('file',[HelloWorldController::class, 'ambilFile']);
Route::get('lorem', [Htmlcontroller::class, 'getLorem']);
Route::get('tabel', [LatihanController::class,'gettabel']);
Route::get('form', [LatihanController::class,'gettabel']);