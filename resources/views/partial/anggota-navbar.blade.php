@section('anggota-navbar-items')
  @if(Auth::check() && Auth::user()->role == 'anggota')
    <li class="nav-item me-2">
      <a class="nav-link" href="#">Edit Profil</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="#">CRUD Berita</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="#">Edit Profile Anggota</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="#">Data Anggota</a>
    </li>
    <li class="nav-item me-2">
      <a class="btn btn-primary" href="#">Logout</a>
  </li>
  @endif
@endsection
