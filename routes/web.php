<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

// Auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard
Route::get('/dashboard', function () {
    return view('pages.analis');
})->name('dashboard');

// Pages
Route::get('/analis', function () {
    return view('pages.analis');
})->name('analis');

Route::get('/orders', function () {
    return view('pages.orders');
})->name('orders');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/customers', function () {
    return view('pages.customers');
})->name('customers');

Route::get('/reports', function () {
    return view('pages.reports');
})->name('reports');

Route::get('/setting', function () {
    return view('pages.setting');
})->name('setting');

// Logout
Route::get('/logout', function () {
    return redirect()->route('login');
})->name('logout');
