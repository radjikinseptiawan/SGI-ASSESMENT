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
    Route::get("/admin/dashboard/detail/{mhs}",[MahasiswaController::class,"detail"])->name("admin.detail");
    Route::get("/admin/dashboard/tambah",[MahasiswaController::class,'tambah'])->name("admin.tambah");
    Route::post("/admin/dashboard/tambah",[MahasiswaController::class,'sendTambahRequest'])->name('tambah.request');
    Route::get("admin/dashboard/edit/{mhs}",[MahasiswaController::class,'edit'])->name('admin.edit');
    Route::put("/admin/dashboard/edit/{mhs}",[MahasiswaController::class,'sendEditRequest'])->name('edit.request');
    Route::delete("/admin/dashboard/hapus/{mhs}",[MahasiswaController::class,"hapusData"])->name("hapus.request");
});



Route::get("/",[MahasiswaController::class,"run"]);
Route::post("/",[MahasiswaController::class,'findPeople'])->name("find.people");
