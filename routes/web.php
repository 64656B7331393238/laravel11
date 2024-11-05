<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentController::class, 'getStudents']);

// Route::get('users', [UserController::class, 'users']);

// Route::view('home', 'home')->middleware([AgeCheck::class, CountryCheck::class]);
// Route::view('about', 'about')->middleware(AgeCheck::class);

// Route::view('home', 'home')->middleware('check1'); //user cannot access under 18, and only from the india

// Route::middleware('check1')->group(function () {
//     Route::view('about', 'about');
//     Route::view('list', 'about');
//     Route::view('user', 'about');
//     Route::view('contact', 'about');
// });

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



// Route::controller(StudentController::class)->group(function () {
//     Route::get('show', 'show');

//     Route::get('add', 'add');

//     Route::get('delete', 'delete');

//     Route::get('about/{name}', 'about');
// });
