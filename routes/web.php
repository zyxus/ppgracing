<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
});

//Route::get('webapp', function () {
//    return view('ppgracingbot.welcome');
//});
//
//Route::get('webapp/profile', [ProfileController::class, 'show'])->middleware('auth');

Route::get('webapp', function () {
    return Inertia::render('UserRegistration'); // Загружает Vue-компонент Home.vue
});

Route::get('webapp/profile', function () {
    return Inertia::render('Profile'); // Загружает Vue-компонент Profile.vue
});

Route::get('webapp/championships', function () {
    return Inertia::render('Championships'); // Загружает Vue-компонент Championships.vue
});
