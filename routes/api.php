<?php

use App\Http\Controllers\DengueInfoApplicationController;
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

Route::get('/dengue-info',[DengueInfoApplicationController::class,'index']);
Route::get('/dengue-info/{dengueInfoApplication}',[DengueInfoApplicationController::class,'show']);
Route::post('/dengue-info/store',[DengueInfoApplicationController::class,'store']);
Route::put('/dengue-info/edit/{id}',[DengueInfoApplicationController::class,'update']);
Route::delete('/dengue-info-delete/{id}',[DengueInfoApplicationController::class,'destroy']);
