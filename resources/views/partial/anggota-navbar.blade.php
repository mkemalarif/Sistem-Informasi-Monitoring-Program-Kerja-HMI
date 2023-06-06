<li class="nav-item me-2">
  <a class="nav-link" href="/anggota/profile-setting/{{ auth()->user()->id }}">Edit Profil</a>
</li>
<li class="nav-item me-2">
  <a class="nav-link" href="/anggota/tambah-berita">Posting Berita</a>
</li>
<li class="nav-item me-2">
  <a class="nav-link" href="/anggota/program-kerja">Program Kerja Cabang</a>
</li>
<li class="nav-item me-2">
  <a class="nav-link" href="/anggota/data-anggota">Anggota Cabang</a>
</li>
<li class="nav-item me-2">
  <form action="/logout">
    @csrf
    <button type="submit" class="nav-link btn btn-primary text-light" href="#">
      Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
  </form>
</li>