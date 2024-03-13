<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>Form Alat</title>

    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="{{asset('dist/images/logos/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('dist/libs/prismjs/themes/prism-okaidia.min.css')}}">
    <link  id="themeColors"  rel="stylesheet" href="{{asset('dist/css/style.min.css')}}">
                <script src="{{asset('dist/libs/jquery/dist/jquery.min.js')}}"></script>

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
            <a href="./index.html" class="text-nowrap logo-img">
              <img src="dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
              <img src="dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
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
                <span class="hide-menu">Form</span>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span></span>
                </a>
              </li>
              
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Form</span>
              </li>
             
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('formberitaacara.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Survey Pengecekan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('troubleshoot.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-triangle-filled"></i>
                  </span>
                  <span class="hide-menu">Troubleshoot</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index3.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">TaskList AC-Floor</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index4.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">TaskList Air Cooled</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index5.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">TaskList AHUP</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">TaskList PAC</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Cold Storage PAC</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Cooling Unit</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Mini Chiller</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Evaporative AColer</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist AHU</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Cooling Tower</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Humidifier</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Dehumidifier</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist FCU</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Exhaust Fan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Pompa</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Spot Cooling</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Water Mist</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./index6.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-notes"></i>
                  </span>
                  <span class="hide-menu">Tasklist Chiller Centrifungal</span>
                </a>
              </li>
              <!-- ============================= -->
              <!-- ============================= -->
           
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
        <div class="container-fluid">
          <!-- --------------------------------------------------- -->
          <!--  Form Inputs Grid Start -->
          <!-- --------------------------------------------------- -->
                @yield('content')
          <!--  Form Inputs Grid End -->
          <!-- --------------------------------------------------- -->
        </div>
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

    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
  </body>
</html>
