<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get("/login",[AuthController::class,'render'])->name('login'); 
Route::post("/login",[AuthController::class,"login"])->name("send.login.form");
Route::post("/logout",[AuthController::class,"logout"])->name("logout");


// NOTE : Nama dari route harus bersifat unique
Route::middleware(['auth'])->group(function(){
Route::get("/admin/dashboard",[MahasiswaController::class,'runForAdmin'])->name('admin.dashboard');
});


Route::post("/admin/dashboard",function(){
    return;
})->name("admin");


Route::get("/",[MahasiswaController::class,"run"]);

Route::post("/profile",function(){
    return;
});