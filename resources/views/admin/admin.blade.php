<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite(["resourcers/js/app.js","resources/css/app.css"])
</head>
<body>
    @include("componen.navbar")

    <div class="mt-5 shadow bg-light text-success p-5 d-flex flex-column ">
        <h1 class="fs-2">Halo Admin</h1>
        <p>Selamat Datang Kembali</p>
        
        <div class="d-flex justify-content-end">
            <button class="btn bg-success text-light">Tambah Data</button>
        </div>
    </div>

    <table>
        <thead>

        </thead>
    </table>
</body>
</html>