<?php

use Illuminate\Support\Facades\Route;

// Single-page portfolio: every section lives on the home screen.
Route::get('/', function () {
    return view('home');
})->name('home');

// Old page URLs now jump to their section on the main page.
Route::get('/education', fn () => redirect('/#education'))->name('education');
Route::get('/skills', fn () => redirect('/#skills'))->name('skills');
Route::get('/certifications', fn () => redirect('/#certifications'))->name('certifications');
Route::get('/projects', fn () => redirect('/#projects'))->name('projects');
