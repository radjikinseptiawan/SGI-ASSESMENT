<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Detail</title>
</head>
<body>       
    @include("componen.logoutNav")
    <div id="parent">

    </div>

    <div class="mt-5 p-3 d-flex flex-column align-items-center align-self-center vh-100 items-content-center justify-content-center">
    <div class="card text-bg-light mb-3" style="max-width: 28rem;">
        <div class="card-header">{{ $data->nomor_induk_mahasiswa }}</div>
            <div class="card-body">
            <h5 class="card-title">{{$data->nama_lengkap}}</h5>
            <p class="card-text">Tempat Tanggal Lahir : {{$data->tempat_tanggal_lahir}}</p>
            <p class="card-text">Domisili : {{$data->domisili}}</p>
            <p class="card-text">Tempat Tanggal Lahir : {{$data->jurusan}}</p>
        </div>
    </div>
    @auth 
    <div class="d-flex gap-2">
        <button class="btn btn-success" onclick="window.location.href ='/admin/dashboard'">Kembali</button>
        <button class="btn btn-warning" onclick="window.location.href ='/admin/dashboard/edit/{{ $data->mahasiswa_id}}'">Edit</button>
        <button id="delete" onclick="tampilanModalHapus('{{$data->mahasiswa_id}}')" class="btn btn-danger">Hapus</button>
    </div>
    </div>
    @endauth
<div class="modal fade" id="confirmDelete" tabindex="-1">
    <div class="modal-dialog">
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-body">Yakin mau hapus data ini?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <script>
        function tampilanModalHapus(id){
            const form = document.getElementById("deleteForm")
            form.action = `/admin/dashboard/hapus/${id}`
            const modal = new window.bootstrap.Modal(document.getElementById('confirmDelete'))
            modal.show()
        }
    </script>

</body>
</html>