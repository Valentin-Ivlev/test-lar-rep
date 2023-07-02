<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonController;
use App\Http\Controllers\EducationLevelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('api_key')->group(function () {
    Route::get('persons', [PersonController::class, 'index']);
    Route::post('persons', [PersonController::class, 'store']);
    Route::get('persons/{id}', [PersonController::class, 'show']);
    Route::put('persons/{id}', [PersonController::class, 'update']);
    Route::delete('persons/{id}', [PersonController::class, 'destroy']);

    Route::get('education-levels', [EducationLevelController::class, 'index']);
    Route::post('education-levels', [EducationLevelController::class, 'store']);
    Route::get('education-levels/{id}', [EducationLevelController::class, 'show']);
    Route::put('education-levels/{id}', [EducationLevelController::class, 'update']);
    Route::delete('education-levels/{id}', [EducationLevelController::class, 'destroy']);
});
