<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\User\HomeController;

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController\Index::class, 'index'])->name('home');

Route::get('/register', [Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [Auth\RegisterController::class, 'store'])->name('register');

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Auth\LoginController::class, 'store'])->name('login');

Route::post('/logout', [Auth\LogoutController::class, 'store'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'admin',
    ], function(){
    
        Route::get('/', [DashboardController\Index::class, 'index'])->name('dashboard');

        Route::get('/account', [AccountController\Index::class, 'index'])->name('account');
        Route::put('/account', [AccountController\Index::class, 'update'])->name('account');

        // Post routes
        Route::get('/posts', [PostController\Index::class, 'index'])->name('posts.index');

        Route::get('/posts/create', [PostController\Create::class, 'index'])->name('posts.create');
        Route::post('/posts/store', [PostController\Create::class, 'store'])->name('posts.store');

        Route::get('/posts/edit/{post}', [PostController\Update::class, 'index'])->name('posts.edit');
        Route::put('/posts/update/{post}', [PostController\Update::class, 'update'])->name('posts.update');

        Route::delete('/posts/delete', [PostController\Delete::class, 'destroy'])->name('posts.destroy');

        Route::post('/posts/editor/upload', [PostController\Editor::class, 'upload'])->name('posts.editor.upload');
        // ----
    });
});
