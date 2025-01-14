<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'sendContactMessage'])->name('contact.send');
