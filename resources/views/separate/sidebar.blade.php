<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="{{  route('casts.edit', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name}}<h3></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/casts" class="nav-link @if (Request::segment(1) == 'casts') active @endif">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Cast</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/genres" class="nav-link @if (Request::segment(1) == 'genres') active @endif">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Genre</p>
                </a>
              </li>
            <li class="nav-item">
              <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link btn btn-warning">
                  Logout
                </button>
              </form>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>