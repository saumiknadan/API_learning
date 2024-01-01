<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;


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

// dummy api getting data
Route::get("data",[dummyAPI::class,'getData']);
// get data from database
Route::get("list",[DeviceController::class,'list']);
// get Api with parameter: only work when id will be provide
Route::get("list_para/{id}",[DeviceController::class,'para']);

// get Api with parameter: only work when id will be provide
Route::get("list_para/{id}",[DeviceController::class,'para']);

// get Api with parameter: id is optional now. if provided will show the data according to id or show all.
Route::get("list_para2/{id?}",[DeviceController::class,'para2']);

// POST API: Send data to databases 
Route::post("add",[DeviceController::class,'add']);