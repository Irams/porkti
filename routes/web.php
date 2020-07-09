<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/static', function () {
    return view('static');
})->name('static');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/single', function () {
    return view('single');
})->name('single');

Route::get('/archive', function () {
    return view('archive');
})->name('archive');
