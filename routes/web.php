<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/index');
});
Route::get('/detail', function () {
    return view('detail.index');
})->name('detail');


