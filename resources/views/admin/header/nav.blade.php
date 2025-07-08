<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <a class="navbar-brand" href="#">Admin Panel</a>

  <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
    <form class="d-flex mx-auto my-2 my-lg-0" role="search" style="max-width: 300px;">
      <div class="input-group">
        <input type="text" class="form-control search-input" placeholder="Search...">
        <span class="input-group-text bg-transparent border-0">
          <i class="fas fa-search search-icon"></i>
        </span>
      </div>
    </form>
  
   <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.dashboard.index') ? 'active' : '' }}" href="{{ route('admin.dashboard.index') }}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.movie.index') ? 'active' : '' }}" href="{{ route('admin.movie.index') }}">Movies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.genre.index') ? 'active' : '' }}" href="{{ route('admin.genre.index') }}">Genres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>