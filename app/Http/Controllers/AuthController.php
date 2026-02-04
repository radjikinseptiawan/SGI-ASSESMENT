<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function render(){
        return view("auth.login");
    }

    public function login(Request $request){
    try{
    // Memvalidasi akun apakah aman diolah oleh server atau berbahaya
        $credentials = $request->validate([
            'name' => "required|string|max:255",
            'password' => "required|string|max:255"
        ]);

        //Melakukan percobaan untuk login ke admin 
        if(Auth::attempt($credentials)){
            // Membuat session
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'name' => 'Username atau password salah!'
        ])->onlyInput('name');
    }catch(\Exception $e){
        return dd($e->getMessage());
    }   
}

    public function logout(Request $request){
        try{
            Auth::logout();

            // Menonaktifkan session awal
            $request->session()->invalidate();

            // Membuat session token baru
            $request->session()->regenerateToken();
            return redirect("/login");
        }catch(\Exception $e){
            return dd($e);
        }     
    }

}