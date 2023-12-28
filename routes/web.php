<?php

use App\Http\Controllers\API\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;


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

Route::get('/',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/create',[BlogController::class,'create'])->name('blogs.create');
Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');
Route::get('blogs/{id}/edit',[BlogController::class,'edit']);
Route::put('blogs/{id}/update',[BlogController::class,'update']);
Route::get('blogs/{id}/delete',[BlogController::class,'destroy']);
Route::get('blogs/{id}/show',[BlogController::class,'show']);
