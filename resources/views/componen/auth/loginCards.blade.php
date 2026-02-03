@guest

<div class="card shadow mx-auto" style="width: 32rem;">
  <div class="card-body">
        <h1 class="text-md-center fs-4">Login</h1>
        <form action="{{ route("send.login.form") }}" method="POST">
        @csrf
            <div class="input-group my-4 flex-nowrap">
            <span class="input-group-text" id="name">Username</span>
             <input type="text" class="form-control" placeholder="Username" aria-label="name" name="name" aria-describedby="id">
        </div>
        @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="nim">Password</span>
             <input type="password" class="form-control" placeholder="Password" name="password" aria-label="nim" aria-describedby="id">
        </div>

        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div class="flex d-flex mt-2 align-items-center justify-content-center flex-column ">
        <button class="btn btn-success text-light">Masuk</button>
        <a href="/">Kembali ke dashboard</a>
        </div>
        </form>

    </div>
</div>
 @endguest
