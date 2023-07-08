<?php
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//regiester on API//
Route::post('register',[UserController::class,'store']);

//Find data on API//
Route::get('find',[UserController::class,'index']);

//Show data on API {ID WISE}//
Route::get('find/{id}',[UserController::class,'show']);

//Show data on API {ID WISE}//
Route::get('change',[UserController::class,'update']);
