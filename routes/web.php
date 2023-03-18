<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');

});
Route::controller(ClientController::class)->group(function () {
    Route::get('/category-page', 'categoryPage')->name('category_page');
    Route::get('/single-product', 'singleProduct')->name('single_product');
    Route::get('/add-to-cart', 'addToCart')->name('add_to_cart');
    Route::get('/check-out', 'checkOut')->name('check_out');
    Route::get('/user-profile', 'userProfile')->name('user_profile');

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
        Route::post('/store_subcategory', 'store')->name('store_subcategory');
        Route::get('/edit_subcategory/{id}', 'edit')->name('edit_subcategory');
        Route::post('/update_subcategory/{id}', 'update')->name('update_subcategory');
        Route::get('/delete_subcategory/{id}', 'delete')->name('delete_subcategory');
       
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all_product', 'index')->name('all_product');
        Route::get('/add_product', 'addProduct')->name('add_product');
        Route::post('/store_product', 'store')->name('store_product');
        Route::get('/edit_product/{id}', 'edit')->name('edit_product');
        Route::post('/update_product/{id}', 'update')->name('update_product');
        Route::get('/delete_product/{id}', 'delete')->name('delete_product');
       
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
