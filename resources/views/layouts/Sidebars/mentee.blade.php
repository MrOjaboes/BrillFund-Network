<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/Interface/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white"> App Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/Interface/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><b>{{ Auth::user()->name }}</b></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
       
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         {{-- <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Meetings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Google Meet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Zoom</p>
                </a>
              </li>

            </ul>
          </li>
          --}}


          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
              <i class="fas fa-th nav-icon"></i>
              <p>Home</p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('home.users') }}" class="nav-link {{ request()->is('home/users') ? 'active' : '' }}">
              <i class="fas fa-users nav-icon"></i>
              <p>Users</p>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="{{ route('home.categories') }}" class="nav-link {{ request()->is('home/category') ? 'active' : '' }}">
              <i class="fas fa-home nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home.orders') }}" class="nav-link {{ request()->is('home/orders') ? 'active' : '' }}">
              <i class="fas fa-home nav-icon"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home.items') }}" class="nav-link {{ request()->is('home/items') ? 'active' : '' }}">
              <i class="fas fa-flag nav-icon"></i>
              <p>Items</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('mentee.profile') }}" class="nav-link {{ request()->is('home/profile') ? 'active' : '' }}">
              <i class="fas fa-cog nav-icon"></i>
              <p>Settings</p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a id="logout" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
