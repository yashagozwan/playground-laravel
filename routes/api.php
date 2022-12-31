<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::middleware('auth:sanctum')->group(function (): void {
    Route::prefix('/tasks')->controller(TaskController::class)->group(function (): void {

    });

    Route::prefix('/user')->controller(UserController::class)->group(function (): void {

    });
});

Route::prefix('/auth')->controller(AuthController::class)->group(function (): void {

});
