<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Authentication\AdminLoginController;
use App\Http\Controllers\Authentication\AdminRegisterController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\UserController;
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

Route::prefix('/')->group(function () {
  Route::get('/', [BlogController::class, 'index'])->name('blog');
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'login']);
  Route::get('/register', [RegisterController::class, 'index'])->name('register');
  Route::post('/register', [RegisterController::class, 'register']);
});


Route::prefix('/admin')->group(function () {
  Route::get('/register', [AdminRegisterController::class, 'index'])->name('register-admin');
  Route::post('/register', [AdminRegisterController::class, 'register']);
  Route::get('/login', [AdminLoginController::class, 'index'])->name('login-admin');
  Route::post('/login', [AdminLoginController::class, 'login']);
  Route::get('/', [UsersController::class, 'index'])->name('admin');
  Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
  Route::get('/comments', [CommentsController::class, 'index'])->name('comments');
});
