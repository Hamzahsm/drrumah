  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"> 
        <form method="POST" action="{{ route('logout') }}" class="mt-2">
          @csrf

          <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
              <i class="fas fa-sign-out-alt"></i> Logout
          </x-dropdown-link>
        </form>
      </li>

    </ul>
</nav>