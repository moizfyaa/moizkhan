<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
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
// User
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('/register',[FrontendController::class,'register'])->name('register');
Route::post('/register',[FrontendController::class,'register_post'])->name('register_post');

// Admin
Route::group(['prefix' => 'admin','middleware' => ['authCheck']], function() {

});
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('dashboard');


Route::get('/admin/category',[CategoryController::class,'index'])->name('category');
Route::post('/admin/category',[CategoryController::class,'category_post'])->name('category_post');
Route::delete('/admin/category/{id}',[CategoryController::class,'category_delete'])->name('category_delete');
Route::get('/admin/category/update/{id}',[CategoryController::class,'category_update'])->name('category_update');
Route::put('admin/category/update/{id}',[CategoryController::class,'category_update_post'])->name('category_update_post');