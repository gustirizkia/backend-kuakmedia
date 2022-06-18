<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('like-saya', [AuthController::class, 'MyLike'])->middleware('auth:api');

Route::get('kategori', [CategoryController::class, 'list']);

Route::get('artikel', [ArticleController::class, 'list']);
Route::get('artikel/detail', [ArticleController::class, 'detail']);
Route::post('artikel/create', [ArticleController::class, 'create'])->middleware('auth:api');
Route::get('artikel/like', [LikeController::class, 'likeArticle'])->middleware('auth:api');

