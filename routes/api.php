<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\CategoryApiController;

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


Route::get('/categories', [CategoryApiController::class, 'index']);
Route::get('categories/{id}/articles', [CategoryApiController::class, 'articles']);

Route::get('/articles', [ArticleApiController::class, 'index']);
Route::get('/articles/{article}', [ArticleApiController::class, 'show']);
