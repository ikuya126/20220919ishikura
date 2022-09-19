<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/',[FormController::class,'index']);
Route::post('/create',[FormController::class,'create']);
Route::get('/thanks',[FormController::class,'thanks']);