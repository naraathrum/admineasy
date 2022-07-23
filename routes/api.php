<?php
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', [FirebaseController::class, 'create']);
Route::get('/', [FirebaseController::class, 'index']);
Route::put('/', [FirebaseController::class, 'edit']);
Route::delete('/', [FirebaseController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});