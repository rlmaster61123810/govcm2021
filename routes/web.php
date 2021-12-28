<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

//Community_name
Route::get('/community_name', [App\Http\Controllers\Community_nameController::class, 'index'])->name('community_name.index');
Route::get('/community_name/create', [App\Http\Controllers\Community_nameController::class, 'create'])->name('community_name.create');
Route::post('/community_name', [App\Http\Controllers\Community_nameController::class, 'store'])->name('community_name.store');
Route::get('/community_name/{community_name}', [App\Http\Controllers\Community_nameController::class, 'show'])->name('community_name.show');
Route::get('/community_name/{community_name}/edit', [App\Http\Controllers\Community_nameController::class, 'edit'])->name('community_name.edit');
Route::put('/community_name/{community_name}', [App\Http\Controllers\Community_nameController::class, 'update'])->name('community_name.update');
Route::delete('/community_name/{community_name}', [App\Http\Controllers\Community_nameController::class, 'destroy'])->name('community_name.destroy');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('community_name.index');
// login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('home');

Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

// users
// Route::get('/users', '\App\Http\Controllers\UsersController@index')->name('users');
