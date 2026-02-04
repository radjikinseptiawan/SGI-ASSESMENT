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

        Mahasiswa::insert([
            [
                'nama_lengkap' => 'Radjikin Septiawan',
                'nomor_induk_mahasiswa' => '2023010001',
                'tempat_tanggal_lahir' => 'Jakarta, 12-08-2003',
                'domisili' => 'Jl. Kebon Jeruk Raya No. 15, Jakarta Barat',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Ahmad Fauzanio',
                'nomor_induk_mahasiswa' => '2023010002',
                'tempat_tanggal_lahir' => 'Bekasi, 03-03-2004',
                'domisili' => 'Jl. Sultan Agung No. 22, Bekasi Timur',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Dinda Maharani',
                'nomor_induk_mahasiswa' => '2023010003',
                'tempat_tanggal_lahir' => 'Depok, 21-11-2003',
                'domisili' => 'Jl. Margonda Raya No. 88, Depok',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Rizky Ramadhan',
                'nomor_induk_mahasiswa' => '2023010004',
                'tempat_tanggal_lahir' => 'Tangerang, 09-07-2002',
                'domisili' => 'Jl. Raya Serpong KM 7, Tangerang',
                'jurusan' => 'Manajemen Informatika',
            ],
            [
                'nama_lengkap' => 'Siti Aisyah Putri',
                'nomor_induk_mahasiswa' => '2023010005',
                'tempat_tanggal_lahir' => 'Bogor, 14-01-2004',
                'domisili' => 'Jl. Pajajaran No. 10, Bogor',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Muhammad Fajar',
                'nomor_induk_mahasiswa' => '2023010006',
                'tempat_tanggal_lahir' => 'Jakarta, 27-05-2003',
                'domisili' => 'Jl. Daan Mogot No. 45, Jakarta Barat',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Nabila Khairunnisa',
                'nomor_induk_mahasiswa' => '2023010007',
                'tempat_tanggal_lahir' => 'Bekasi, 02-10-2004',
                'domisili' => 'Jl. Ahmad Yani No. 12, Bekasi Selatan',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Andi Pratama',
                'nomor_induk_mahasiswa' => '2023010008',
                'tempat_tanggal_lahir' => 'Makassar, 18-06-2002',
                'domisili' => 'Jl. Perintis Kemerdekaan No. 8, Makassar',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Putra Mahendra',
                'nomor_induk_mahasiswa' => '2023010009',
                'tempat_tanggal_lahir' => 'Bandung, 30-09-2003',
                'domisili' => 'Jl. Soekarno Hatta No. 55, Bandung',
                'jurusan' => 'Manajemen Informatika',
            ],
            [
                'nama_lengkap' => 'Fajar Nugroho',
                'nomor_induk_mahasiswa' => '2023010010',
                'tempat_tanggal_lahir' => 'Semarang, 04-12-2002',
                'domisili' => 'Jl. Pandanaran No. 19, Semarang',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Ayu Lestari',
                'nomor_induk_mahasiswa' => '2023010011',
                'tempat_tanggal_lahir' => 'Yogyakarta, 25-02-2004',
                'domisili' => 'Jl. Kaliurang KM 5, Yogyakarta',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Ilham Maulana',
                'nomor_induk_mahasiswa' => '2023010012',
                'tempat_tanggal_lahir' => 'Jakarta, 11-11-2003',
                'domisili' => 'Jl. Sudirman No. 7, Jakarta Pusat',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Rina Oktaviani',
                'nomor_induk_mahasiswa' => '2023010013',
                'tempat_tanggal_lahir' => 'Karawang, 08-08-2004',
                'domisili' => 'Jl. Tuparev No. 23, Karawang',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Bayu Saputra',
                'nomor_induk_mahasiswa' => '2023010014',
                'tempat_tanggal_lahir' => 'Cirebon, 17-04-2002',
                'domisili' => 'Jl. Tuparev No. 6, Cirebon',
                'jurusan' => 'Manajemen Informatika',
            ],
            [
                'nama_lengkap' => 'Mega Puspita',
                'nomor_induk_mahasiswa' => '2023010015',
                'tempat_tanggal_lahir' => 'Sukabumi, 05-01-2004',
                'domisili' => 'Jl. Pelabuhan II No. 9, Sukabumi',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Aditya Prakoso',
                'nomor_induk_mahasiswa' => '2023010016',
                'tempat_tanggal_lahir' => 'Solo, 22-06-2003',
                'domisili' => 'Jl. Slamet Riyadi No. 14, Solo',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Luthfi Ramadhan',
                'nomor_induk_mahasiswa' => '2023010017',
                'tempat_tanggal_lahir' => 'Depok, 19-03-2004',
                'domisili' => 'Jl. Raya Cinere No. 4, Depok',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Farhan Akbar',
                'nomor_induk_mahasiswa' => '2023010018',
                'tempat_tanggal_lahir' => 'Jakarta, 28-10-2002',
                'domisili' => 'Jl. Fatmawati No. 33, Jakarta Selatan',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama_lengkap' => 'Intan Permata',
                'nomor_induk_mahasiswa' => '2023010019',
                'tempat_tanggal_lahir' => 'Bogor, 09-09-2003',
                'domisili' => 'Jl. Dramaga Raya No. 21, Bogor',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama_lengkap' => 'Dwi Kurniawan',
                'nomor_induk_mahasiswa' => '2023010020',
                'tempat_tanggal_lahir' => 'Purwokerto, 01-06-2002',
                'domisili' => 'Jl. Jenderal Soedirman No. 18, Purwokerto',
                'jurusan' => 'Manajemen Informatika',
            ],
        ]);

    }
}
