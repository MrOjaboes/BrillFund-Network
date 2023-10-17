<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="/FrontEnd/rockie/images/general/logo_2.png" alt="logo" class="w-50" style="opacity: .8">
      <span class="brand-text font-weight-light">DEXEARN</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/AdminUi/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <br>

      <!-- Sidebar Menu -->
      <div style="overflow-x:hidden;overflow-y:scroll;height:500px">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="{{ route('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.contact-us') }}" class="nav-link {{ request()->is('admin/contact-us') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users nav-icon"></i>
                <p>
                  Contact Us
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.dailypost') }}" class="nav-link {{ request()->is('admin/dailypost') ? 'active' : '' }}">
                <i class="fas fa-book nav-icon"></i>
                <p>Dailypost</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.quiz') }}" class="nav-link {{ request()->is('admin/quiz') ? 'active' : '' || request()->is('admin/quiz/new')}}">
                <i class="fas fa-envelope nav-icon"></i>
                <p>Messages</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('admin.quiz') }}" class="nav-link {{ request()->is('admin/quiz') ? 'active' : '' || request()->is('admin/quiz/new')}}">
                <i class="fas fa-book nav-icon"></i>
                <p>Quiz</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('admin.deposits') }}" class="nav-link {{ request()->is('admin/deposits') ? 'active' : '' }}">
                <i class="fa fa-dollar-sign nav-icon"></i>
                <p>Deposits</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.withdrawals') }}" class="nav-link {{ request()->is('admin/withdrawals') ? 'active' : '' }}">
                <i class="fa fa-dollar-sign nav-icon"></i>
                <p>Withdrawals</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('admin.packages') }}" class="nav-link {{ request()->is('admin/packages') ? 'active' : '' }}">
                <i class="fas fa-users nav-icon"></i>
                <p>Packages</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('admin.users') }}" class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
                <i class="fas fa-users nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.vendors') }}" class="nav-link {{ request()->is('admin/vendors') ? 'active' : '' }}">
                <i class="fas fa-users nav-icon"></i>
                <p>Vendors</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.coupons') }}" class="nav-link {{ request()->is('admin/coupons') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Coupons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                <i class="fas fa-cog nav-icon"></i>
                <p>Settings</p>
              </a>
            </li>

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
    </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
