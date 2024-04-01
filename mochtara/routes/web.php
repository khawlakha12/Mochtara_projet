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

Route::get('/', function () {
    return view('pages.home');
});

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






