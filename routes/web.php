<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsControllers;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name("dashboard");
Route::get('/about', function() {
    return view('about');
})->name('about');
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::get('/products', function() {
    return view('products');
})->name('products');
Route::get('/category-detail', function() {
    return view('category-detail');
});
Route::get('/sign-up', function() {
    return view('register');
})->middleware('guest')->name('sign-up');
Route::get('/sign-in', function() {
    return view('login');
})->middleware('guest')->name('sign-in');
Route::get('admin/add-product', function() {
    return view('add-product');
})->middleware('auth')->name('add.product');
Route::get('admin/edit-product', function() {
    return view('edit-product');
})->middleware('auth');

Route::controller(ProductsControllers::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/products', 'products');
    Route::get('/admin', 'admin')->middleware('auth')->name('admin');
    Route::post('/product/store', 'store')->name('store');
    Route::get('/product/show/{product}', 'show')->name('edit.product');
    Route::put('/product/update/{product}', 'update')->name('edit.product.proccess');
    Route::delete('/product/delete/{product}', 'destroy')->name('delete.product');
    Route::get('/search', 'search')->name('search');
});

Route::controller(CategoriesController::class)->group(function() {
    Route::get('/category-detail/{category}', 'index')->name('category');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/sign-up-proccess', 'register')->name('sign-up.proccess');
    Route::post('/sign-in-proccess', 'login')->name('sign-in.proccess');
    Route::get('/logout', 'logout')->name('logout')->middleware("auth");
});