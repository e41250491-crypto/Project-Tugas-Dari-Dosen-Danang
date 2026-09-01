<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/bahasa', function () {
    return view('pages.bahasa');
})->name('bahasa');

Route::get('/gamelan', function () {
    return view('pages.gamelan');
})->name('gamelan');

Route::get('/wayang', function () {
    return view('pages.wayang');
})->name('wayang');

Route::get('/tentang-kami', function () {
    return view('pages.tentang');
})->name('tentang');
