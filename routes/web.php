<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get ('/category', [CategoryController::class, 'index']) ->name('category.index');

Route::get ('/category/create', [CategoryController::class, 'create']) ->name('category.create');

//digunakan untuk inset data menggunakan post
Route::post('category/store', [CategoryController::class,'store'])->name('category.store');

Route::get ('/category/edit/{id}', [CategoryController::class, 'edit']) ->name('category.edit');

Route::put('category/update/{id}', [CategoryController::class,'update'])->name('category.update');


Route::delete('category/delete/{id}', [CategoryController::class,'destroy'])->name('category.delete');


Route::resource('book', BookController::class);
