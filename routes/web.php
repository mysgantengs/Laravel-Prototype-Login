<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/okes', function () {
    return view('ok');
});

Route::controller(\App\Http\Controllers\LoginController::class)->group(function () {
    Route::get('/login', 'Login')->middleware([\App\Http\Middleware\GuestOnlyMiddleware::class]);
    Route::post('/login', 'ActionLogin')->middleware([\App\Http\Middleware\GuestOnlyMiddleware::class]);
    Route::post('/logout', 'Logout')->middleware([\App\Http\Middleware\MemberOnlyMiddleware::class]);
});
