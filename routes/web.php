<?php

use Illuminate\Support\Facades\Route;
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
    // return view('dashboard');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('user',[UserController::class,'dashboard'])->name('user.dashboard');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

 Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('admin/users',[UserController::class,'index'])->name('user.index'); //<--(listing)-->
    Route::get('admin/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');  //<--(edit)-->
    Route::post('admin/user/update',[UserController::class,'update'])->name('user.update');
    Route::delete('admin/user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');//
    Route::get('/register/verify/{id}', [UserController::class, 'verify'])->name('verify');
    Route::get('/register/unverify/{id}', [UserController::class, 'unverify'])->name('unverify');
 });
