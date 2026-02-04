<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    @auth
    @include("componen.logoutNav")
    <div class="d-flex p-4 justify-content-center items-content-center">
        <div class="card mt-5  p-2 " style="width:28rem;">
        <h1 class="fs-4 text-center">Tambah Data Mahasiswa</h1>
            <div class="card-body">
            <form action="{{ route('tambah.request') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Nama Mahasiswa</span>
                 <input name="nama_mahasiswa" type="text" class="form-control" placeholder="Nama Mahasiswa" aria-label="Nama Mahasiswa" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Nomor Induk Mahasiswa</span>
                 <input type="number" name="nomor_induk_mahasiswa" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-label="Nomor Induk Mahasiswa" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Tempat Lahir</span>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Tanggal Lahir" aria-label="Tempat Tanggal Lahir" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Tanggal Lahir</span>
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tempat Tanggal Lahir" aria-label="Tempat Tanggal Lahir" aria-describedby="basic-addon1">
                </div>

               <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Alamat</span>
                    <textarea class="form-control" aria-label="With textarea" name="alamat" style="resize:none;"></textarea>
                </div>

                <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Jurusan</span>
                <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" aria-label="Jurusan" aria-describedby="basic-addon1">
                </div>
                <div class="d-flex flex-row-reverse items-content-center justify-content-center gap-2">
                <button type="submit" class="btn btn-success">Tambah Data</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href ='/admin/dashboard'">Batalkan</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @endauth
</body>
</html>