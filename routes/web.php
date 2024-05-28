<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvataxiController;
use App\Http\Controllers\KolyaskiController;
use App\Http\Controllers\TenqogamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get("/kolyaski", [KolyaskiController::class, 'index'])->name("kolyaski.index");
Route::get("/invataxi", [InvataxiController::class, 'index'])->name("invataxi.index");
Route::get("/tenqogam", [TenqogamController::class, 'index'])->name("tenqogam.index");
