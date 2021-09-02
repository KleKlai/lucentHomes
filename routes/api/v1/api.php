<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\api\v1\OnlineApplicationController;

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


// Users Route
Route::prefix('/user')->group( function() {
    Route::post('/login', [LoginController::class, 'login']);
});

// Route::middleware('auth:api')->post('/onboarding', [OnlineApplicationController::class, 'onBoarding']);
Route::post('/onboarding', [OnlineApplicationController::class, 'onBoarding']);

