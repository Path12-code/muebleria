<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->name('dashboard');

//Route::redirect('/','dashboard');

Route::get('/contact', [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('contact');

//Route::get('/contact', function () {
//    return view('contact');
//})->middleware(['auth', 'verified'])->name('contact');

Route::get('/productos', [ProductController::class, 'index'])->name('products.index');
Route::get('/productos/{id}', [ProductController::class, 'show'])->name('products.show');
//Route::post('/productos/{id}/comentarios', [CommentController::class, 'store'])->name('comments.store');

Route::prefix('admin')->name('admin.')->middleware('auth', 'admin')->group(function () {
    Route::resource('productos', AdminProductController::class)->except(['show']);
});

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
