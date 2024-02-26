<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/', function() {
    return view('pages.Auth.register');
});
Route::get('/admin', function() {
    return view('pages.Admin.Dashboard');
});


Route::get('/sigin', [AuthController::class, 'SignIn'])->name('login.show');
Route::post('/sigin', [AuthController::class, 'SignInPost'])->name('SignIn');

Route::post('/register', [AuthController::class, 'register'])->name('register');


