<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('home/profile/user', 'home')->name('hm');
// Route::view('home/username/{name}', 'home')->name('user');

// Route::get('user', [HomeController::class, 'user']);
// Route::get('show', [HomeController::class, 'show']);

// Route::prefix('student')->group(function () {
//     Route::view('/home', 'home');
//     Route::get('/show', [HomeController::class, 'show']);
//     Route::get('/add', [HomeController::class, 'add']);
// });

// Route::prefix('student/india')->group(function () {
//     Route::view('home', 'home');
//     Route::get('show', [HomeController::class, 'show']);
//     Route::get('add', [HomeController::class, 'add']);
// });



Route::controller(StudentController::class)->group(function () {
    Route::get('show', 'show');

    Route::get('add', 'add');

    Route::get('delete', 'delete');

    Route::get('about/{name}', 'about');
});

