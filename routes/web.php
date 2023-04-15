<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', [BlogController::class,'index'])->name('blog.index');
    Route::get('/create', [BlogController::class,'create'])->name('blog.create');
    Route::post('/store', [BlogController::class,'store'])->name('blog.store');
    Route::get('/{id}/show', [BlogController::class,'show'])->name('blog.show');
    Route::put('/{id}/update', [BlogController::class,'update'])->name('blog.updat
    e');
    Route::delete('/{id}/destroy', [BlogController::class,'destroy'])->name('blog.
    destroy');
    Route::get('/{id}/edit', [BlogController::class,'edit'])->name('blog.edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('user',[UserController::class,'dashboard'])->name('user.dashboard');
