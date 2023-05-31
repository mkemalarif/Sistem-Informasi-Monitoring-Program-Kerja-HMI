<ul class="navbar-nav ms-auto">
  <li class="nav-item me-2">
    <a class="nav-link" href="/admin/registrasi-member">Registrasi Anggota</a>
  </li>
  <li class="nav-item me-2">
    <a class="nav-link" href="/admin/registrasi-komisariat">Registrasi Komisariat</a>
  </li>
  <li class="nav-item me-2">
    <a class="nav-link" href="/admin/validasi-berita">Berita Control</a>
  </li>
  <li class="nav-item me-2">
    <a class="nav-link" href="/admin/tambah-proker">Tambah Program Kerja</a>
  </li>
  <li class="nav-item me-2">
    <form action="/logout">
      @csrf
      <button type="submit" class="nav-link btn btn-primary text-light" href="#">
        Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
    </form>
  </li>
</ul>