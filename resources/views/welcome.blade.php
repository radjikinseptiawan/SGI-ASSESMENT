<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>

    @include("componen.navbar")
    

    <div class=" d-flex flex-column mt-5 p-5 align-items-center">
        <div class="input-group mb-3" style="width:32rem;">   
            <input id="cari_nama" name="cari" type="text" class="form-control border-2 text-success" 
            placeholder="Cari Nama Mahasiswa" 
            aria-label="Example text with button addon" aria-describedby="button-addon1">
            
            <input id="cari_prodi" name="cari" type="text" class="form-control border-2 text-success" 
            placeholder="Cari Program Studi" 
            aria-label="Example text with button addon" aria-describedby="button-addon1">
        
            <input id="cari_nim" name="cari" type="text" class="form-control border-2 text-success" 
            placeholder="Cari Nomor Induk Mahasiswa" 
            aria-label="Example text with button addon" aria-describedby="button-addon1">
        
        </div>
            
        <table class="table table-striped table-hover my-4">
            <thead>
                @include("componen.table.user.table")
            </thead>
            <tbody class="text-center" id="table-body">
                @foreach($data as $item)
                <tr>
                 <td>{{ $item->nomor_induk_mahasiswa }}5</td>
                 <td>{{ $item->nama_lengkap }}</td>
                 <td>{{ $item->tempat_tanggal_lahir }}</td>
                 <td>{{ $item->domisili }}</td>
                 <td>{{ $item->jurusan }}</td>
                <td>
                    <form action="{{ route('admin.detail',['mhs' => $item->nomor_induk_mahasiswa]) }}">
                    <button class="btn btn-success">
                        Detail
                    </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>

    <script>
        // Diubah dulu respons dari $data ke dalam bentuk format JSON 
        const data = @json($data);
        const cariNama = document.getElementById("cari_nama");
        const tableBody = document.getElementById("table-body");
        const cariProdi = document.getElementById("cari_prodi");
        const cariNim = document.getElementById("cari_nim");

        // Cari berdasarkan nomor induk mahasiswa
        cariNim.addEventListener("input",()=>{
            const inputValue = cariNim.value.toLowerCase();
            const results = data.filter((item)=>{
                return item.nomor_induk_mahasiswa.toLowerCase().includes(inputValue);
            });

            renderNewTable(results);
        })


        // Cari berdasarkan program studi
        cariProdi.addEventListener("input",()=>{
            const inputValue = cariProdi.value.toLowerCase();
            const results = data.filter((item)=>{
                return item.jurusan.toLowerCase().includes(inputValue);
            })

            renderNewTable(results)
        })

        // Cari Berdasarkan nama mahasiswa
        cariNama.addEventListener("input",()=>{
            const inputValue = cariNama.value.toLowerCase();

            const results = data.filter((item)=>{
                return item.nama_lengkap.toLowerCase().includes(inputValue)
            });

            renderNewTable(results)
        })

       
        function renderNewTable (listTableMahasiswa){
            tableBody.innerHTML = "";

            listTableMahasiswa.forEach(item =>{
                const row = 
                `
                <tr>
                    <td>${item.nomor_induk_mahasiswa}</td>
                    <td>${item.nama_lengkap}</td>
                    <td>${item.tempat_tanggal_lahir}</td>
                    <td>${item.domisili}</td>
                    <td>${item.jurusan}</td>
                    <td>
                        <a href="/admin/dashboard/detail/${item.mahasiswa_id}" class="btn btn-success">Detail</a>
                    </td>
                </tr>
                `;

                tableBody.innerHTML += row;
            })
        }

        
    </script>
</body>
</html>