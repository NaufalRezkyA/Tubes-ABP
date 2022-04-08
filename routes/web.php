<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/package', function () {
    return view('package');
});

// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/signup', [SignupController::class, 'signup']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/post', function () {
    return view('post');
});

Route::get('/admin', function () {
    return view('adminPage');
});





