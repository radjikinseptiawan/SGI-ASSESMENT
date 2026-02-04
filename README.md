# SGI - ASSEGMENT
## Sistem Kelola Data Mahasiswa

## Tech Stack
- Laravel
- Bootstrap
- Mysql
- PHP


## Fitur 
- Autentikasi Sederhana
- Menampilkan Data Mahasiswa
- Menambahkan Data Mahasiswa
- Mengubah Data Mahasiswa
- Menghapus Data Mahasiswa

# SGI-ASSESMENT

Web aplikasi sederhana untuk kebutuhan assesment menggunakan Laravel.

Project ini dibuat untuk memenuhi requirement technical test dengan fokus pada authentication, role management, dan CRUD data mahasiswa.

---

## 🔧 Tech Stack
- **Backend** : Laravel 10
- **Frontend** : Blade Template + Bootstrap 5
- **Database** : MySQL
- **Authentication** : Laravel Auth
- **Search** : JavaScript (client-side filtering)

---

## ✨ Fitur Aplikasi

### 1. Authentication
- Register
- Login (menggunakan email / username dan password)
- Logout

### 2. User Role Management
Terdapat 2 role pengguna:
- **Admin**
- **User (Reguler)**

### 3. Manajemen Data Mahasiswa
Data mahasiswa memiliki field:
- NIM
- Nama
- Jenis Kelamin
- Tempat Lahir
- Tanggal Lahir
- Alamat Tinggal / Domisili
- Jurusan

### 4. Hak Akses Berdasarkan Role
**Admin**
- Menambah data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Melihat daftar data mahasiswa

**User Reguler**
- Melihat daftar data mahasiswa
- Melihat detail data mahasiswa
- Tidak memiliki akses tambah, edit, dan delete

### 5. Fitur Pencarian
- Pencarian data mahasiswa pada tabel menggunakan **JavaScript (client-side search)**  
- Digunakan untuk memfilter data berdasarkan NIM, Nama, atau Jurusan
- Cocok untuk kebutuhan assesment dengan jumlah data kecil hingga menengah

