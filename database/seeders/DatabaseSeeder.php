<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'password' => 'admin123',
            'email'=>'admin123@gmail.com'
        ]);
   
        Mahasiswa::create([
            'nomor_induk_mahasiswa' => '2023012345',
            'nama_lengkap'=>'Radjikin Septiawan',
            'tempat_tanggal_lahir' => 'Jakarta, 12 Agustus 2003',
            'domisili' => 'Jl. Kebon Jeruk Raya No. 15, Jakarta Barat',
            'jurusan' => 'Teknik Informatika'
        ]);

        Mahasiswa::create([
            'nomor_induk_mahasiswa' => '2023012346',
            'nama_lengkap'=>'Ahmad Fauzan',
            'tempat_tanggal_lahir' => 'Bekasi, 3 Maret 2004',
            'domisili' => 'Jl. Sultan Agung No. 22, Bekasi Timur',
            'jurusan' => 'Sistem Informasi'
        ]);

        Mahasiswa::create([
            'nomor_induk_mahasiswa' => '2023012347',
            'nama_lengkap'=>'Siti Aisyah',
            'tempat_tanggal_lahir' => 'Depok, 25 Mei 2003',
            'domisili' => 'Jl. Margonda Raya No. 101, Depok',
            'jurusan' => 'Teknik Komputer'
        ]);
        
    }
}
