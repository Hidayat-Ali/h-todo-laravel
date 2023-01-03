<?php

use App\Http\Controllers\TodoController;
use Faker\Guesser\Name;
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

Route::get('/', [TodoController::class,'index']);
Route::get('create', [TodoController::class,'create']);
Route::get('update', [TodoController::class,'update']);
Route::get('edit/{todo}', [TodoController::class, 'edit']);
Route::get('details/{todo}', [TodoController::class,'detail']);
Route::get('delete/{todo}', [TodoController::class,'delete']);




// POST ROUTES

Route::post('/store', [TodoController::class,'store']);
Route::post('/update/{todo}', [TodoController::class,'update']);

