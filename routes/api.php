<?php

use App\Http\Controllers\LinkController;
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

Route::group(['prefix' => 'link'], function () {
    Route::get('', [LinkController::class, 'index_data']);
    Route::post('store', [LinkController::class, 'store']);
    Route::post('update', [LinkController::class, 'update']);
    Route::post('delete', [LinkController::class, 'delete']);
});
