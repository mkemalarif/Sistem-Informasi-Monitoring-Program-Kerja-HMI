{{-- @section('ketua-navbar-items') --}}
  @if(Auth::check() && Auth::user()->role == 'ketua')
    <li class="nav-item me-2">
      <a class="nav-link" href="#">CRUD Akun Admin</a>
    </li>
    <li class="nav-item me-2">
      <a class="nav-link" href="#">CRUD Proker</a>
    </li>
  @endif
{{-- @endsection --}}
