<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/api/products', 'App\Http\Controllers\ProductController@index');
    Route::get('/api/menclothes', [productcontroller::class, 'menclothes']);
    Route::get('/api/womenclothes', [productcontroller::class, 'womenclothes']);
    Route::get('/dashboard', [productcontroller::class, 'dashboard'])->name('dashboard');

    Route::resource('/products', productcontroller::class);




Route::get('/search',[productcontroller::class, 'search'])->name('products.search');

    Route::get('/api/menclothes', [productcontroller::class, 'menclothes']);
    Route::get('/api/womenclothes', [productcontroller::class, 'womenclothes']);
require __DIR__.'/auth.php';
