<nav class="navbar z-3 navbar-expand-lg top-0 text-light bg-success position-fixed" style="width:100%;">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <form action="{{ route("logout") }}" method="POST">
                @csrf
            <button class="nav-link active text-light" aria-current="page">Logout</button>
            </form>
        </li>
       </ul>
    </div>
  </div>
</nav>
