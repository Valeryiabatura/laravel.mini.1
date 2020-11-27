<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view(('contact'));
})->name('contact');


Route::post('/contact/submit', [MainController::class, 'submit'])->name('contact-form');

Route::get('/', [MainController::class,'index'])->name('home');
Route::get('/search', [MainController::class,'search'])->name('search');



