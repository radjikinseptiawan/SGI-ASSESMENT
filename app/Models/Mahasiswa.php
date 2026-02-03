<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    
    protected $fillable = [
        "nomor_induk_mahasiswa",
        "nama_lengkap",
        "tempat_tanggal_lahir",
        "domisili",
        "jurusan"
    ];
}
