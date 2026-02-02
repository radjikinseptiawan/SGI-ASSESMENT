<div class="card shadow mx-auto" style="width: 32rem;">
  <div class="card-body">
        <h1 class="text-md-center fs-4">Login</h1>
        
        <div class="input-group my-4 flex-nowrap">
            <span class="input-group-text" id="nim">NIM</span>
             <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-label="nim" aria-describedby="id">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="nim">Password</span>
             <input type="password" class="form-control" placeholder="Password" aria-label="nim" aria-describedby="id">
        </div>

        <div class="flex d-flex mt-2 align-items-center justify-content-center flex-column ">
        <button class="btn btn-success text-light">Masuk</button>
        <a href="{{Route('register')}}">Belum punya akun? klik disini!</a>
        </div>

    </div>
</div>