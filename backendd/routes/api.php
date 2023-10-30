<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\fithawkUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/showApi/{id}', [productcontroller::class, 'showApi']);
Route::post('/login', [fithawkUserController::class, 'store']);
Route::get('/users', [fithawkUserController::class, 'indexApi']);







Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
