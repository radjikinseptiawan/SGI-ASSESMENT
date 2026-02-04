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

    public function runForAdmin(){
        $fetchData = Mahasiswa::all();

        return view("admin.admin",[
            'data' => $fetchData
        ]);
    }


    public function detail($mhs){
        // NOTE: Method first digunakan agar data yang dikembalikan berbentuk objek bukan array
        $fetchData = Mahasiswa::where("nomor_induk_mahasiswa",$mhs)->first();

        return view("admin.detail",[
            "data" => $fetchData
        ]);
    }

    public function tambah(){
        return view("admin.tambah");
    }

    public function sendTambahRequest(Request $req){
        try{
        $validasi = $req->validate([
            "nama_mahasiswa" => "string|max:255|required",
            "nomor_induk_mahasiswa" => "string|max:255|required",
            "tempat_lahir" => "string|max:255|required",
            "tanggal_lahir" => "string|max:255|required",
            "alamat" => "string|max:255|required",
            "jurusan" => "string|max:255|required"
        ]);

        Mahasiswa::create([
            'nama_lengkap' => $validasi['nama_mahasiswa'],
            "nomor_induk_mahasiswa" => $validasi["nomor_induk_mahasiswa"],
            'tempat_tanggal_lahir' => $validasi['tempat_lahir'] . ", " . $validasi['tanggal_lahir'],
            'domisili'=>$validasi['alamat'],
            'jurusan' => $validasi['jurusan']
        ]);

        return redirect()->intended('/admin/dashboard');
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }


    public function edit($mhs){
        $fetchData = Mahasiswa::where("mahasiswa_id",$mhs)->first();
        
        return view("admin.edit",[
            'rawData' => $fetchData
        ]);
    }

    public function sendEditRequest(Request $req,$mhs){
        try{
            $validate = $req->validate([
            "nama_mahasiswa" => "string|max:255|required",
            "nomor_induk_mahasiswa" => "string|max:255|required",
            "tempat_tanggal_lahir" => "string|max:255|required",
            "alamat" => "string|max:255|required",
            "jurusan" => "string|max:255|required"
            ]);

            $mahasiswa = Mahasiswa::where("mahasiswa_id",$mhs)->firstorFail();

            $mahasiswa->update([
                'nama_lengkap' => $validate['nama_mahasiswa'],
                "nomor_induk_mahasiswa" => $validate["nomor_induk_mahasiswa"],
                'tempat_tanggal_lahir' => $validate['tempat_tanggal_lahir'],
                'domisili'=>$validate['alamat'],
                'jurusan' => $validate['jurusan']    
            ]);
            return redirect("/admin/dashboard")->with("success","Data Berhasil diperbarui");
    }catch(\Exception $e){
        dd($e->getMessage());
    }
    }


    public function hapusData($mhs){
        try{
        $mahasiswa = Mahasiswa::where("mahasiswa_id",$mhs)->first();

        $mahasiswa->delete();

        return redirect()->route('admin.dashboard');
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }


    public function findPeople(Request $req){
        try{
        $validasi = $req->validate([
            'cari' => 'string|max:255|required'
        ]);

        $rawData = Mahasiswa::where('nama_lengkap',$validasi['cari'])->first();

        return view("admin.detail",[
            'data' => $rawData
        ]);
    }catch(\Exception $e){
        dd($e->getMessage());
    }
    }
}
