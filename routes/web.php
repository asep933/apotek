<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsControllers;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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
})->middleware('admin:admin')->name('add.product');
Route::get('admin/edit-product', function() {
    return view('edit-product');
})->middleware('admin:admin'); 
Route::get('/article', function() {
    return view('article');
});
Route::get('/article-detail', function() {
    return view('article-detail');
});

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::controller(ProductsControllers::class)->group(function() {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/products', 'products')->name('product.list');
    Route::get('/admin', 'admin')->middleware('admin:admin')->name('admin');
    Route::post('/product/store', 'store')->name('store');
    Route::get('/product/show/{product}', 'show')->name('edit.product');
    Route::put('/product/update/{product}', 'update')->name('edit.product.proccess');
    Route::delete('/product/delete/{product}', 'destroy')->name('delete.product');
    Route::get('/search', 'search')->name('search');
    Route::get('/product-detail/{product}', 'detail')->name('product.detail');
});

Route::controller(CategoriesController::class)->group(function() {
    Route::get('/category-detail/{category}', 'index')->name('category');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/sign-up-proccess', 'register')->name('sign-up.proccess');
    Route::post('/sign-in-proccess', 'login')->name('sign-in.proccess');
    Route::get('/logout', 'logout')->name('logout')->middleware("auth");
    Route::post('/forgot-password', 'forgot')->middleware('guest')->name('password.email');
    Route::post('/reset-password', 'reset')->middleware('guest')->name('password.update');
});

Route::controller(ArticleController::class)->group(function() {
    Route::get('/article', 'index')->name('article.list');
    Route::get('/article-detail/{id}', 'show')->name('article.detail');
    Route::delete('/delete-comment/{commentId}/{postId}', 'deleteComment')->name('delete.comment');
});

Route::controller(TestimonialController::class)->group(function() {
    Route::post('/post-testimonial', 'store')->name('store.testimonial');
});