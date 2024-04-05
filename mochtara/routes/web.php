<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\loginController;


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
})->name('home');
Route::get('/admin', function() {
    return view('pages.Admin.Dashboard');
});
Route::get('/shop', function() {
    return view('pages.shop');
});
Route::get('/design', function() {
    return view('pages.design');
});
Route::get('/contact', function() {
    return view('pages.contact');
});
Route::get('/ser', function() {
    return view('pages.service');
});
Route::get('/form', function() {
    return view('pages.form');
});
Route::get('/profil', function() {
    return view('pages.Admin.user');
});
Route::get('/liste_clients', function() {
    return view('pages.Admin.tables');
});
Route::get('/arabe', function() {
    return view('pages.Admin.rtl');
});
Route::get('/Categories', function() {
    return view('pages.Admin.Categorie');
});

Route::get('/categ', function() {
    return view('pages.Art_designer.Cate_art');
});
Route::get('/new_design', function() {
    return view('pages.Art_designer.dash_art');
});
Route::get('/profile_designer', function() {
    return view('pages.Art_designer.profile');
});
//---------------------------Register---------------------------------//
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');
//---------------------------Login---------------------------------//
Route::get('/', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/', [loginController::class, 'login'])->name('login.submit');



