<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'page' => 'home',
    ]);
})->name('home');

Route::get('/education', function () {
    return view('education', [
        'page' => 'education',
    ]);
})->name('education');

Route::get('/projects', function () {
    return view('projects', [
        'page' => 'projects',
    ]);
})->name('projects');
