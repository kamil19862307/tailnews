<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('contact', [IndexController::class, 'contact'])->name('contact');
Route::get('news', [IndexController::class, 'news'])->name('news');
Route::get('contacts', [IndexController::class, 'showContactForm'])->name('contacts');
Route::post('contact_form_process', [IndexController::class, 'contactForm'])->name('contact_form_process');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware('auth')->group(function(){

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('posts/comment/{id}', [PostController::class, 'comment'])->name('comment');

});

Route::middleware('guest')->group(function(){

    // Авторизация потльзователя на сайте
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

    // Регистрация нового пользователя на сайте
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register_process', [AuthController::class, 'register'])->name('register_process');

    // Восстановление пароля
    Route::get('forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('forgot_process', [AuthController::class, 'forgot'])->name('forgot_process');

});

Route::get('show', [IndexController::class, 'showEdit'])->name('show_edit');
Route::get('edit', [IndexController::class, 'edit'])->name('edit');
