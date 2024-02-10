<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/admin" class="text-nowrap logo-img">
          <img src="{{ asset('DASHBOARD/src/assets/images/logos/logo.png')}}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Website Menu</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/job" aria-expanded="false">
              <span>
                <i class="ti ti-briefcase"></i>
              </span>
              <span class="hide-menu">Job</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/kategori" aria-expanded="false">
              <span>
                <i class="ti ti-category"></i>
              </span>
              <span class="hide-menu">Category</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('DASHBOARD/src/ui-card.html')}}" aria-expanded="false">
              <span>
                <i class="ti ti-info-circle"></i>
              </span>
              <span class="hide-menu">About</span>
            </a>
          </li>
        </ul>

        <hr>

        <div class="navbar-collapse justify-content-start px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-start">
            
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('DASHBOARD/src/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                <span class="text-secondar"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>