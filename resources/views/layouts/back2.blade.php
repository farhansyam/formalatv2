<!DOCTYPE html>
<html lang="en">

<head>
  <!-- --------------------------------------------------- -->
  <!-- Title -->
  <!-- --------------------------------------------------- -->
  <title>Dikari Equipment</title>

  <!-- --------------------------------------------------- -->
  <!-- Required Meta Tag -->
  <!-- --------------------------------------------------- -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" type="image/png" href="{{asset('dist/images/logos/favicon.ico')}}" />
  <link id="themeColors" rel="stylesheet" href="{{asset('dist/css/style.min.css')}}">
  <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>
  <!-- PWA  -->
  <meta name="theme-color" content="#6777ef" />
  <link rel="apple-touch-icon" href="{{ asset('1.jpeg') }}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{asset('dist/images/logos/favicon.ico')}}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!-- --------------------------------------------------- -->
  <!-- Body Wrapper -->
  <!-- --------------------------------------------------- -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- --------------------------------------------------- -->
    <!-- Sidebar -->
    <!-- --------------------------------------------------- -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="" class="text-nowrap logo-img">
            <img src="{{asset('dist/images/logos/dark-logo.jpeg')}}" class="dark-logo" width="180" alt="" />
            <img src="{{asset('dist/images/logos/light-logo.svg')}}" class="light-logo" width="180" alt="" />
          </a>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Main Menu</span>
            </li>

            <li class="sidebar-item" style="">
              <a class="sidebar-link" href="" aria-expanded="true">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">{{auth()->user()->role_sipm}}</span></span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span></span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('equipment.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-air-conditioning"></i>
                </span>
                <span class="hide-menu">Equipment</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('schedule.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-event"></i>
                </span>
                <span class="hide-menu">Schedule</span>
              </a>
            </li>
            @if(auth()->user()->role_sipm != 'user')

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('part.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-artboard"></i>
                </span>
                <span class="hide-menu">Part Proposal</span>
              </a>
            </li>
            @endif

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('scan')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-qrcode"></i>
                </span>
                <span class="hide-menu">Scan & Search</span>
              </a>
            </li>

            @if (auth()->user()->akses == 4)
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Input Database</span>
            </li>

            <!-- =================== -->
            <!-- Dashboard -->
            <!-- =================== -->
            @if (auth()->user()->role_id == 1)
           @if(auth()->user()->role_sipm != 'admin')
               <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('akun.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('authority.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-key"></i>
                </span>
                <span class="hide-menu">Authority</span>
              </a>
            </li>
            @endif
            @endif
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('customer.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-id-badge"></i>
                </span>
                <span class="hide-menu">Customers</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('kapasitas.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-align-left"></i>
                </span>
                <span class="hide-menu">Capacity</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('area.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Area</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('brand.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Brand/Merk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('tasklist.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-checklist"></i>
                </span>
                <span class="hide-menu">Input Task List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('room.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Room</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('freon.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-square-asterisk"></i>
                </span>
                <span class="hide-menu">Freon Type</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('reguler.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">PM Frequency</span>
              </a>
            </li>
            @endif


            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('logout')}}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>

        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
              <span class="fs-2 text-dark">Designer</span>
            </div>
            <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
              <i class="ti ti-power fs-6"></i>
            </button>
          </div>
        </div>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>

    <!-- --------------------------------------------------- -->
    <!-- Main Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="body-wrapper">
      <!-- --------------------------------------------------- -->
      <!-- Header Start -->
      <!-- --------------------------------------------------- -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
        </nav>
      </header>
      <!-- --------------------------------------------------- -->
      <!-- Header End -->
      <!-- --------------------------------------------------- -->
      <!-- --------------------------------------------------- -->
      <div class="container-fluid ">
        @yield('content')

      </div>
      <!--  Form Inputs Grid Start -->
      <!-- --------------------------------------------------- -->
      <!--  Form Inputs Grid End -->
      <!-- --------------------------------------------------- -->
    </div>

  </div>

  <!-- ---------------------------------------------- -->
  <script src="{{asset('dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- ---------------------------------------------- -->
  <!-- core files -->
  <!-- ---------------------------------------------- -->
  <script src="{{asset('dist/js/app.min.js')}}"></script>
  <script src="{{asset('dist/js/app.init.js')}}"></script>
  <script src="{{asset('dist/js/app-style-switcher.js')}}"></script>
  <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>

  <script src="{{asset('dist/js/custom.js')}}"></script>
  <script src="{{asset('dist/libs/prismjs/prism.js')}}"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
  <script>
    new DataTable('#example');
  </script>
  <!-- ---------------------------------------------- -->
  <!-- current page js files -->
  <!-- ---------------------------------------------- -->

  <script src="{{ asset('/sw.js') }}"></script>
  <script>
    if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
        (registration) => {
          console.log("Service worker registration succeeded:", registration);
        },
        (error) => {
          console.error(`Service worker registration failed: ${error}`);
        },
      );
    } else {
      console.error("Service workers are not supported.");
    }
  </script>
</body>

</html>