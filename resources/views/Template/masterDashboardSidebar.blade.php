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
          @can('admin')
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Dashboard Menu</span>
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
            <a class="sidebar-link" href="/admin/lokasi" aria-expanded="false">
              <span>
                <i class="ti ti-pin"></i>
              </span>
              <span class="hide-menu">Location</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">FrontEnd Menu</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin/about" aria-expanded="false">
              <span>
                <i class="ti ti-info-circle"></i>
              </span>
              <span class="hide-menu">About</span>
            </a>
          </li>
        @endcan
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>