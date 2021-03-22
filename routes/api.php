<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::middleware('auth:api')->group(function(){
	Route::post('/posts', [PostController::class, 'store']);
	Route::get('/user', function (Request $request) {
    	return $request->user();
	});
});
