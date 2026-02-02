<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::get("/",function(){
        return view('auth.login');
    })->name("login"); 

    Route::get("/register",function(){
        return view("auth.register");
    })->name("register");


   Route::get("/admin/dashboard",function(){
        return view("admin.admin");
    });

    Route::post("/admin/dashboard",function(){
        return;
    });

    Route::get("/profile",function(){
        return view("user.profile");
    });

    Route::post("/profile",function(){
        return;
    });