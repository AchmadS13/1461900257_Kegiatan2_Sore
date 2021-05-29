<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', [JadwalController::class, 'index']);
Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/artikel', function () {
    return view('artikel');
});