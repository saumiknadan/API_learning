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

// dummy api getting data  -2
Route::get("data",[dummyAPI::class,'getData']);
// get data from database  -3
Route::get("list",[DeviceController::class,'list']);
// get Api with parameter: only work when id will be provide -4
Route::get("list_para/{id}",[DeviceController::class,'para']);

// get Api with parameter: only work when id will be provide - 4
Route::get("list_para/{id}",[DeviceController::class,'para']);

// get Api with parameter: id is optional now. if provided will show the data according to id or show all. - 4
Route::get("list_para2/{id?}",[DeviceController::class,'para2']);

// POST API: Send data to databases - 5
Route::post("add",[DeviceController::class,'add']);

// PUT API: update data to databases - 5
Route::put("update",[DeviceController::class,'update']);

// search element from the database
Route::get("search/{name}",[DeviceController::class,'search']);
// delete a record
Route::delete("delete/{id}",[DeviceController::class,'delete']);