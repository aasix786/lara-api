<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json(['ok' => true, 'message' => 'API working with sanctum authorization']);
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    // All the protected routes will go here
});
