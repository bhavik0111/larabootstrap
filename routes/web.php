<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/',[UserController::class,'home'])->name('user.home');

Route::get('/user/login',[UserController::class,'login'])->name('user.login'); //<--(USER LOGIN)-->



Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});


Route::middleware(['auth','isAdmin'])->group(function(){

    Route::get('/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::get('admin/users',[UserController::class,'index'])->name('user.index'); //<--(listing)-->
    Route::get('admin/addusers',[UserController::class,'adduser'])->name('user.adduser'); //<--(view user form)-->
    Route::post('admin/store',[UserController::class,'store'])->name('store'); //<--(Insert in db)-->
    Route::get('admin/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');  //<--(edit)-->
    Route::post('admin/user/update',[UserController::class,'update'])->name('user.update');
    Route::delete('admin/user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');//
    Route::get('/admin/verify/{id}', [UserController::class, 'verify'])->name('verify');
    Route::get('/admin/unverify/{id}', [UserController::class, 'unverify'])->name('unverify');

// <--CATEGORY-->
    Route::get('admin/addcategory',[CategoryController::class,'create'])->name('admin.category.create'); //<--(view Category form...)-->
    Route::post('admin/storecategory',[CategoryController::class,'store'])->name('admin.category.store'); //<--(Insert in db)-->
    Route::get('admin/allcategory',[CategoryController::class,'index'])->name('admin.category.index'); //<--(listing)-->
     Route::get('admin/category/{id}/edit',[CategoryController::class,'edit'])->name('admin.category.edit');  //<--(edit)-->
     Route::post('admin/category/update',[CategoryController::class,'update'])->name('admin.category.update');
     Route::delete('admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');//<--(delete)-->
// <--END CATEGORY-->

// <--PRODUCT-->
    Route::get('admin/addproduct',[ProductController::class,'create'])->name('admin.product.create'); //<--(view Category form...)-->
    Route::post('admin/storeproduct',[ProductController::class,'store'])->name('admin.product.store'); //<--(Insert in db)-->
    Route::get('admin/allproduct',[ProductController::class,'index'])->name('admin.product.index'); //<--(listing)-->
     Route::get('admin/product/{id}/edit',[ProductController::class,'edit'])->name('admin.product.edit');  //<--(edit)-->
     Route::post('admin/product/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
     Route::delete('admin/product/delete/{id}',[ProductController::class,'destroy'])->name('admin.product.destroy');//<--(delete)-->
// <--END PRODUCT-->



 });

 //Cart
Route::middleware(['auth'])->group(function(){
    Route::get('user/addtocart/{id}',[CartController::class,'create'])->name('user.cart.cart'); //<--(...)-->
    Route::get('user/cart',[CartController::class,'index'])->name('user.cart.index');
    //Order
    Route::get('user/order/create',[OrderController::class,'create'])->name('user.order.create');
});
