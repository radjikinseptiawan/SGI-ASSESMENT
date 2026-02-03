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


        if(Auth::attempt($credentials)){
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

            $request->session()->invalidate();

            $request->session()->regenerateToken();
            return redirect("/login");
        }catch(\Exception $e){
            return dd($e);
        }     
    }

}