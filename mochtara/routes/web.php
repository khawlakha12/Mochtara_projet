<?php

use App\Models\DesignClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CommendeController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/Designer', function () {
    return view('pages.Art_designer.Cate_art');
});

Route::get('/profile_designer', function () {
    return view('pages.Art_designer.profile');
});
Route::get('/new_product', function () {
    return view('pages.Admin.product');
});

//---------------------------Register---------------------------------//
Route::get('/register', function () {
    return view('pages.Auth.register');
})->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

//---------------------------Login---------------------------------//
Route::get('/log', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/log', [loginController::class, 'login'])->name('login.submit');

//-----------------------------Forgot Password---------------------------------//


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
Route::get('/Designer', [DashController::class, 'show_design']);
Route::delete('/new_design/{id}', [DashController::class, 'destroy_design'])->name('designs.destroy');
Route::get('/new_design', function () {
    return view('pages.Art_designer.dash_art');
});
Route::post('/designs', [DashController::class, 'store'])->name('designs.store');


//-----------------------------Middlewires---------------------------------//
Route::get('/design', function () { return view('pages.design');})->middleware('check.login');
Route::get('/register', function () {return view('pages.Auth.register');})->name('register');
Route::get('/design', function () { return view('pages.design');})->middleware('auth');
Route::middleware(['auth', 'check.admin.role'])->group(function () {
  Route::get('/admin', function () { return view('pages.Admin.Dashboard');
})->name('admin');});
Route::middleware(['auth', 'check.admin.role'])->group(function () {
    Route::get('/Categories', function () { return view('pages.Admin.Categorie');
  })->name('admin');});
  Route::middleware(['auth', 'check.admin.role'])->group(function () {
    Route::get('/liste_clients', function () { return view('pages.Admin.tables');
  })->name('admin');});
  Route::middleware(['auth', 'check.admin.role'])->group(function () {
    Route::get('/new_product', function () { return view('pages.Admin.product');
  })->name('admin');});
  Route::middleware(['auth', 'check.admin.role'])->group(function () {
    Route::get('/profil', function () { return view('pages.Admin.user');
  })->name('admin');});


Route::group(['middleware' => ['auth', 'role:designer']], function () {
    Route::get('/new_design', function () {
        return view('pages.Art_designer.dash_art');
    });
    Route::get('/profile_designer', function () {
        return view('pages.Art_designer.profile');
    });
});
Route::get('/Designer', function () {
    return view('pages.Art_designer.Cate_art');
})->middleware('auth');


//-----------------------------Commendes---------------------------------//
Route::get('/commandes', [CommendeController::class, 'showCommandes'])->name('commandes.show')->middleware('auth');
Route::get('/shop', [CommendeController::class, 'showShop'])->name('shop.show');
Route::post('/commande/store', [CommendeController::class, 'store'])->name('commande.store');
Route::delete('/delete-commande/{id}', [CommendeController::class, 'deleteCommande'])->name('commande.delete');

//-----------------------------Contact email---------------------------------//
Route::post('/sendemail', [EmailController::class, 'sendEmail']);

Route::post('logout', function () { Auth::logout();return redirect('/');})->name('logout');

Route::get('/reset_password', function () {return view('pages.Auth.password');})->name('reset_password');
Route::post('password/email', [PasswordResetController::class, 'sendEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
