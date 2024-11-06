<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user', 'user');
Route::post('add', [UserController::class, 'addUser']);
// Route::view('login', 'login');
// Route::view('profile', 'profile');
// Route::get('logout', [UserController::class, 'logout']);
// Route::post('login', [UserController::class, 'login']);
// Route::get('user', [UserController::class, 'any']);
// Route::post('user', [UserController::class, 'any']);
// Route::put('user', [UserController::class, 'any']);
// Route::put('user', [UserController::class, 'any']);

// Route::any('user', [UserController::class, 'any']);


// Route::match(['get', 'post'], 'user', [UserController::class, 'group1']);

// Route::match(['put', 'delete'], 'user', [UserController::class, 'group2']);

// Route::view('form', 'user');
// Route::get('user', [UserController::class, 'login']);

// Route::get('/check-db', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Database connection successful.";
//     } catch (\Exception $e) {
//         echo "Could not connect to the database. Please check your configuration.";
//     }
// });
