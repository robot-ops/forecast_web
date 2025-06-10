<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoFiringDataController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\VendordataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');
Route::get('/admin/co-firing', function () {
    return view('admin.firing_input');
})->name('admin/co-firing');


// API Admin Co-Firing
Route::resource('admin/table-history', CoFiringDataController::class);

// Profile
Route::resource('admin/profile', AdminController::class);
Route::resource('admin/userlist', UserListController::class);
Route::resource('admin/vendor', VendordataController::class);
