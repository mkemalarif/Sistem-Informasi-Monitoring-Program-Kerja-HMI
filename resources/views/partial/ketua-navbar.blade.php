<li class="nav-item me-2">
  <a class="nav-link" href="#">CRUD Akun Admin</a>
</li>
<li class="nav-item me-2">
  <a class="nav-link" href="#">CRUD Proker</a>
</li>
<li class="nav-item me-2">
  <form action="/logout">
    @csrf
    <button type="submit" class="nav-link btn btn-primary text-light" href="#">
      Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
  </form>
</li>