<?php

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
Route::get('/get-user', 'CashierController@getUser');
Route::middleware('auth:sanctum')->get('/create-customer', 'CashierController@createCustomer');
Route::middleware('auth:sanctum')->get('/clear-account', 'CashierController@clearAccount');
