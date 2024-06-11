<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('getUsers', [CustomerController::class,'getCustomers']);
Route::post('createUser', [CustomerController::class,'createCustomer']);
Route::get('getUser/{id}', [CustomerController::class,'getCustomer']);
Route::delete('deleteUser/{id}', [CustomerController::class,'deleteCustomer']);
Route::post('updateUser', [CustomerController::class,'updateCustomer']);

