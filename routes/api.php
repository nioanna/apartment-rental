<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AuthController;

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
//Route::resource('apartments',ApartmentController::class);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/apartments',[ApartmentController::class,'index']);
Route::get('/apartments/{id}',[ApartmentController::class,'show']);



Route::middleware('auth:sanctum')->group(function(){
    Route::post('/apartments',[ApartmentController::class,'store']);
    Route::put('/apartments/{id}',[ApartmentController::class,'update']);
    Route::delete('/apartments/{id}',[ApartmentController::class,'destroy'])->name('apart-destroy');
    Route::post('/logout',[AuthController::class,'logout']);
});

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});


