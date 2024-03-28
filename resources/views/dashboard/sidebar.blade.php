  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('feed.home') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <div class="sidebar">
      <!-- user profile -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <a href="{{ route('my.profile') }}">
          <div class="image">
            @if (Auth::user()->avatar)
              <img src="../avatars/{{ Auth::user()->name }}/{{ Auth::user()->avatar }}" class="brand-image img-circle elevation-3" width="130px" height="130px">  
            @else
                <img src="{{ asset('images/avatar.jpg') }}" alt="" class="brand-image img-circle elevation-3" width="130px" height="130px">
            @endif
            {{-- <img src="avatars/{{ Auth::user()->name }}/{{ Auth::user()->avatar }}" class="img-circle elevation-2"> --}}
          </div>
          <div class="info">
            <i class="far fa-user mx-2"></i> {{ Auth::user()->name }}
          </div>
        </a>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @hasanyrole('Admin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-database"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class="fas fa-folder-open"></i>
                  <p>Semua Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Tambah User Baru</p>
                </a>
              </li>

            </ul>
          </li> <!-- users -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-database"></i>
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                  <p>Semua Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('roles.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Buat Role Baru</p>
                </a>
              </li>
            </ul>
          </li> <!-- roles -->
          @endhasanyrole

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-database"></i>
              <p>
                Manage Berita
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @hasanyrole('Admin')
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                  <p>Semua Berita</p>
                </a>
              </li>
              @endhasanyrole

              @hasanyrole('Copywriter')
              <li class="nav-item">
                <a href="{{ route('tulisan.saya', auth()->user()->name) }}" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                  <p>Semua Tulisan Anda</p>
                </a>
              </li>
              @endhasanyrole

              <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Buat Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Kategori</p> 
                </a>
              </li>
            </ul>
          </li> <!-- manage berita -->

        </ul>
      </nav>

    </div>
  </aside>