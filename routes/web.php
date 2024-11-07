<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
Route::get('/', function () {
    return view('welcome');
});

Route::get('list', [ProductController::class, 'productList']);
// Route::view('sendEmail', 'sendEmail');
// Route::get('sendMail', [MailController::class, 'sendEmail']);
// Route::get('device/{key:name}', [DeviceController::class, 'index']);
// $data = "hi, lets learn laravel";
// $data = Str::of($data)
//     ->ucfirst()
//     ->replace("Hi", "Hello")
//     ->camel();
// $data = Str::ucfirst($data);
// $data = Str::replace("Hi", "Hello", $data);
// $data = Str::camel($data);
// echo $data;
// Route::get('list', [SellerController::class, 'list']);
// Route::get('manyRel', [SellerController::class, 'manyRel']);
// Route::get('manytoOne', [SellerController::class, 'manytoOne']);
// Route::get('save', [StudentController::class, 'save']);
// Route::view('home', 'home');
// Route::view('about', 'about');
// Route::view('login', 'login');
// Route::view('admin', 'admin');
// Route::view('upload', 'upload');
// Route::post('upload', [ImageController::class, 'upload']);
// Route::get('list', [ImageController::class, 'list']);
// Route::view('student', 'student');
// Route::post('student', [StudentController::class, 'addStudent']);

// Route::get('display', [StudentController::class, 'displayStudent']);
// Route::get('delete/{id}', [StudentController::class, 'deleteStudent']);
// Route::get('edit/{id}', [StudentController::class, 'edit']);
// Route::put('editStudent/{id}', [StudentController::class, 'editStudent']);
// Route::get("search", [StudentController::class, 'search']);
// Route::post("deleteMulti", [StudentController::class, 'deleteMultiple']);
// Route::middleware("SetLang")->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     // Route::get('about/{lang}', function ($lang) {
//     //     App::setLocale($lang);
//     //     return view('about');
//     // });
//     Route::view('about', 'about');

//     Route::get('setLang/{lang}', function ($lang) {
//         Session::put('lang', $lang);
//         return redirect('/');
//     });
// });

// Route::view('about', 'about');

// Route::view('upload', 'upload');
// Route::post('upload', [UploadController::class, 'upload']);

// Route::view('user', 'user');
// Route::post('add', [UserController::class, 'addUser']);
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
