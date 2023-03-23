<?php

use App\Http\Controllers\Candidate;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/resume',[Candidate::class,'profile']);