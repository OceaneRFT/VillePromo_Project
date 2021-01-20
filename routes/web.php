<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//--Auth
Auth::routes();

//--Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']); 

//--Pages
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'productpage'])->name('voir_produit'); 
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'viewByCategory'])->name('voir_produit_par_C');

//--Gestion page panier
Route::post('/panier/add/{id}',[App\Http\Controllers\CartController::class, 'add'])->name('cart_add');
Route::get('/panier',[App\Http\Controllers\CartController::class, 'index'])->name('cart_index');

//--Admin   
Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/contacts', function () {
    return view('/admin/contacts');
});
Route::get('/admin/categories', function () {
    return view('/admin/categories');
});
Route::get('/admin/produits', function () {
    return view('/admin/produits');
});
Route::get('/admin/boutiques', function () {
    return view('/admin/boutiques');
});

//--Requetes Ajax
Route::post('/get', [App\Http\Controllers\AdminController::class, 'get']);
Route::post('/edit',[App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/add', [App\Http\Controllers\AdminController::class, 'add']);
Route::post('/delete', [App\Http\Controllers\AdminController::class, 'delete']);