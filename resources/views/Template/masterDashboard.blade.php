<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $judul }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('DASHBOARD/src/assets/images/logos/favicon.ico')}}" />
  <link rel="stylesheet" href="{{ asset('DASHBOARD/src/assets/css/styles.min.css')}}" />
  @stack('style')
  @notifyCss
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('Template.masterDashboardSidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('Template.masterDashboardTopMenu')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                @yield('namaHalaman')
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">@yield('judul')</h5>
                @yield('content')
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  @include('notify::components.notify')
  <script src="{{ asset('DASHBOARD/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/js/app.min.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('DASHBOARD/src/assets/js/dashboard.js')}}"></script>
  @stack('script')
  @notifyJs
</body>

</html>