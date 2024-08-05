<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('/anime')->group(function(){
    Route::prefix('/user')->group(function(){
        // jika resource, nama path langsung jadi param
        Route::apiResource('/anime', AnimeController::class)->only([
            'store',
            'update',
            'destroy',
        ]);
        Route::name('anime.')->prefix('/anime')->group(function(){
            Route::put('/updateCountStar/{anime}', [AnimeController::class, 'updateCountStar'])->name('updateCountStar');
        });
    });
    Route::prefix('/guest')->group(function(){
        Route::apiResource('/anime', AnimeController::class)->only([
            'index',
            'show',
        ]);
    });
});
