
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

Route::get('/',[HomeController::class,'Home']);

// Route::get('/',[HomeController::class,'testimonials'])->
// middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::middleware(['auth', 'admin'])->group(function () {
 
    Route::get('admin/dashboard', [HomeController::class, 'index']);
    
 
    Route::get('/admin/testimonial', [ProductController::class, 'testimonial'])->name('admin/testimonial');
    Route::get('/admin/testimonial/create', [ProductController::class, 'testi_create'])->name('admin/testimonial/create');
    Route::post('/admin/testimonial/save', [ProductController::class, 'testi_save'])->name('admin/testimonial/save');
    Route::get('/admin/testimonial/edit/{id}', [ProductController::class, 'testi_edit'])->name('admin/testimonial/edit');
    Route::put('/admin/testimonial/edit/{id}', [ProductController::class, 'testi_update'])->name('admin/testimonial/update');
    Route::get('/admin/testimonial/delete/{id}', [ProductController::class, 'testi_delete'])->name('admin/testimonial/delete');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');

    Route::get('/admin/category', [CategoryController::class, 'category'])->name('admin/category');
    Route::get('/admin/category/create', [CategoryController::class, 'cat_create'])->name('admin/category/create');
    Route::post('/admin/category/save', [CategoryController::class, 'cat_save'])->name('admin/category/save');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'cat_edit'])->name('admin/category/edit');
    Route::put('/admin/category/edit/{id}', [CategoryController::class, 'cat_update'])->name('admin/category/update');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'cat_delete'])->name('admin/category/delete');


});
Route::get('/dashboard',[HomeController::class,'login_home'])->
middleware(['auth', 'verified'])->name('dashboard');
Route::get('/productspage/{id}',[HomeController::class,'productspage']);
Route::get('/testimonialspage',[HomeController::class,'testimonialspage']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
 
require __DIR__.'/auth.php';
 
//Route::get('admin/dashboard', [HomeController::class, 'index']);
//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);