<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function run(){
        $fetchData = Mahasiswa::all();

        return view("welcome",[
            'data' => $fetchData
        ]);        
    }
}
