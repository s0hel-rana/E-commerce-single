<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user','verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin_dashboard', 'index')->name('admin_dashboard');
       
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all_category', 'index')->name('all_category');
        Route::get('/add_category', 'addCategory')->name('add_category');
        Route::post('/store_category', 'storeCategory')->name('store_category');
        Route::get('/edit_category/{id}', 'edit')->name('edit_category');
        Route::post('/update_category/{id}', 'update')->name('update_category');
        Route::get('/delete_category/{id}', 'delete')->name('delete_category');
       
    });
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/all_sub_category', 'index')->name('all_sub_category');
        Route::get('/add_sub_category', 'addSubCategory')->name('add_sub_category');
       
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all_product', 'index')->name('all_product');
        Route::get('/add_product', 'addProduct')->name('add_product');
       
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('/all_pending', 'index')->name('pending_order');
       
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
