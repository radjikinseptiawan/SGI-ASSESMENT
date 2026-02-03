<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>

    @include("componen.navbar")
    

    <div class=" d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="input-group mb-3" style="width:32rem;">
             <button class="btn btn-outline-success" type="button" id="button-addon1">Cari</button>
            <input type="text" class="form-control border-2 text-success" 
            placeholder="Cari data mahasiswa" 
            aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>

        <table class="table table-striped table-hover my-4">
            <thead>
                @include("componen.table.user.table")
            </thead>
            <tbody class="text-center">
                @foreach($data as $item)
                <tr>
                 <td>{{ $item->nomor_induk_mahasiswa }}5</td>
                 <td>{{ $item->nama_lengkap }}</td>
                 <td>{{ $item->tempat_tanggal_lahir }}</td>
                 <td>{{ $item->domisili }}</td>
                 <td>{{ $item->jurusan }}</td>
                </tr>
                @endforeach
            </tbody>
        
       
        </table>
    </div>

</body>
</html>