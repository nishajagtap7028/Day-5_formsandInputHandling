<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view ('Welcome');
});


Route::view('user-form', 'user-form');
Route::post('adduser', [UserController::class, 'addUser']);
