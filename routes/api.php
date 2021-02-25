<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);

Route::group(['prefix' => '/', 'middleware' => ['api_token']], function (){
    Route::post('product_create', [ProductController::class, 'store']);
    Route::post('product_update', [ProductController::class, 'update']);
    Route::get('product_detail/{id}', [ProductController::class, 'show']);
    Route::get('all_products', [ProductController::class, 'index']);
});

