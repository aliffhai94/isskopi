<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ItemProduceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreItemController;

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

/*
* API LOGIN
*/

Route::post('login',[AuthenticationController::class,'authenticate']);

/*
* API ITEM RESOURCES
*/

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource('item_produces',ItemProduceController::class);
});


/*
* API STORES RESOURCES
*/

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource('shop',ShopController::class);
});


/*
* API STORES ITEM RESOURCES
*/

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource('store_items',StoreItemController::class);
});