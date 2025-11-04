<?php

use Illuminate\Support\Facades\Route;


// Route::middleware('api')->group(function () {

    Route::apiResource('employees', App\Http\Controllers\Api\EmployeesController::class);

// });

Route::get('/test', function () {
    return response()->json(['message' => 'API working!']);
});