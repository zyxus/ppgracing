<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebAppController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
});

Route::get('webapp', [WebAppController::class, 'index'])->name('index');
Route::get('webapp/register', [WebAppController::class, 'register'])->name('register');
Route::get('webapp/profile', [WebAppController::class, 'profile'])->name('profile');
Route::get('webapp/championships', [WebAppController::class, 'championships'])->name('championships');
