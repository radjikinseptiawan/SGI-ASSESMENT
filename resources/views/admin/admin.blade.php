<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite(["resources/js/app.js","resources/css/app.css"])
</head>
<body>
    @include("componen.logoutNav")
    @auth
    <div class="mt-5 shadow bg-light text-success p-5 d-flex flex-column ">
        <h1 class="fs-2">Halo {{Auth::check() ? Auth::user()->name : 'Unknown'}}</h1>
        <p>Selamat Datang Kembali</p>
        
        <div class="d-flex justify-content-end">
            <button class="btn bg-success text-light" onclick="window.location.href = '/admin/dashboard/tambah'">Tambah Data</button>
        </div>
    </div>

    <table class="table text-center table-striped table-hover my-4">
        <thead>
            @include("componen.table.admin.tableAdmin")
        </thead>
        <tbody>
            @foreach ( $data as $item )
                 <tr>
                 <td>{{ $item->nomor_induk_mahasiswa }}5</td>
                 <td>{{ $item->nama_lengkap }}</td>
                 <td>{{ $item->tempat_tanggal_lahir }}</td>
                 <td>{{ $item->domisili }}</td>
                 <td>{{ $item->jurusan }}</td>
                 <td class="btn bg-success p-1 text-light" onclick="window.location.href = '/admin/dashboard/detail/{{$item->nomor_induk_mahasiswa}}'">Detail</td>
                </tr>
            @endforeach
        </tbody>
    </table>        
    @endauth
</body>
</html>