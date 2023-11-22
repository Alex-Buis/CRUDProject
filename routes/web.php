<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'index']);

Route::get('/create', [ListController::class,'create']);
Route::post('/create', [ListController::class,'store']);
// Route::get('/create/{id}', [HomeController::class,'show']);


Route::get('/list/{id}/modifier', [CategoryController::class,'edit']);
Route::get('/list/{id}/supprimer', [ListController::class,'destroy']);
Route::post('/list/{id}/modifier', [ListController::class,'update']);
Route::get('/index/{id}',[ListController::class,'show']);


Route::get('/index', [ListController::class,'index']);





