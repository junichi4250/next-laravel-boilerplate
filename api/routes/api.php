<?php

use App\Http\Controllers\MemoController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// メモ全件取得
Route::get('/memos', [MemoController::class, 'fetch']);

// メモ登録
Route::post('/memos', [MemoController::class, 'create']);

Route::get('/students', [ApiController::class, 'getAllStudents']);
Route::get('/students/{id}', [ApiController::class, 'getStudent']);
Route::post('/students', [ApiController::class, 'create']);
Route::put('students/{id}', [ApiController::class, 'update']);
Route::delete('students/{id}', [ApiController::class, 'delete']);

// 商品
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'get']);
Route::post('/products', [ProductController::class, 'create']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'delete']);
