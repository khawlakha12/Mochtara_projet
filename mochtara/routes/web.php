<?php

use App\Models\DesignClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CommendeController;

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
})->name('home');
Route::get('/admin', function () {
    return view('pages.Admin.Dashboard');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/design', function () {
    return view('pages.design');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/ser', function () {
    return view('pages.service');
});
Route::get('/form', function () {
    return view('pages.form');
});
Route::get('/profil', function () {
    return view('pages.Admin.user');
});

Route::get('/arabe', function () {
    return view('pages.Admin.rtl');
});

Route::get('/Categ', function () {
    return view('pages.Art_designer.Cate_art');
});

Route::get('/profile_designer', function () {
    return view('pages.Art_designer.profile');
});
Route::get('/new_product', function () {
    return view('pages.Admin.product');
});

//---------------------------Register---------------------------------//
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

//---------------------------Login---------------------------------//
Route::get('/log', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/log', [loginController::class, 'login'])->name('login.submit');

//-----------------------------Forgot Password---------------------------------//
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

//-----------------------------Shop---------------------------------//
Route::get('/search/products', [ProductController::class, 'search'])->name('search.products');

//-----------------------------Products---------------------------------//
Route::get('/new_product', [ProductController::class, 'showProducts'])->name('showProducts');
Route::post('/new_product', [ProductController::class, 'addProduct'])->name('addProduct');
Route::delete('/new_product/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');



//-----------------------------Test Angular---------------------------------//
Route::get('/angular', function () {
    return view('Angular.angular');
});

//-----------------------------Crud Users---------------------------------//
Route::get('/liste_clients', [DashController::class, 'showUsers'])->name('users.show');
Route::get('/liste_clients/{id}', [DashController::class, 'deleteUser'])->name('user.delete');

//-----------------------------Crud categories---------------------------------//
Route::post('/add-category', [DashController::class, 'addCategory'])->name('add.categorie');
Route::get('/Categories', [DashController::class, 'ShowCategorie'])->name('categorie');
Route::delete('/categories/{id}', [DashController::class, 'deleteCategory'])->name('categories.delete');



//-----------------------------Design---------------------------------//
Route::get('/Categ', [DashController::class, 'show_design']);
Route::delete('/new_design/{id}', [DashController::class, 'destroy_design'])->name('designs.destroy');
Route::get('/new_design', function () {
    return view('pages.Art_designer.dash_art');
});
Route::post('/designs', [DashController::class, 'store'])->name('designs.store');


//-----------------------------Middlewires---------------------------------//
Route::get('/design', function () { return view('pages.design');})->middleware('check.login');
Route::get('/register', function () {return view('pages.Auth.register');})->name('register');
Route::get('/design', function () { return view('pages.design');})->middleware('auth');


//-----------------------------Commendes---------------------------------//
Route::get('/commandes', [CommendeController::class, 'showCommandes'])->name('commandes.show');
Route::get('/shop', [CommendeController::class, 'showShop'])->name('shop.show');
Route::post('/commande/store', [CommendeController::class, 'store'])->name('commande.store');
Route::delete('/delete-commande/{id}', [CommendeController::class, 'deleteCommande'])->name('commande.delete');

//-----------------------------Contact email---------------------------------//
Route::post('/sendemail', [EmailController::class, 'sendEmail']);
