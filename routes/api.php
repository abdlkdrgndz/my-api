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
/**
 * Custom Routes
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Auth Routes
 */
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);

/**
 * Use in routes -> 'middleware' => ['api_token']
 * Product Process Routes
 */
Route::group(['prefix' => '/'], function (){
    Route::get('all_products', [ProductController::class, 'index']);
});

/**
 * Api Resource Routes
 */
Route::apiResources([
    'products' => ProductController::class
]);

