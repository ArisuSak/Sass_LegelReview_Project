<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@latest/css/themify-icons.css">

</head>
<style>
 
</style>
 
 <!--  Body Wrapper -->
 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <!-- Sidebar Start -->
  @if(Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('super_admin')))
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./admin" class="text-nowrap logo-img">
          <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
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
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/firm-data" aria-expanded="false">
              <i class="ti ti-file-description"></i>
              <span class="hide-menu">Firm Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/review-data" aria-expanded="false">
              <i class="ti ti-cards"></i>
              <span class="hide-menu">Review Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/user-data" aria-expanded="false">
              <i class="ti ti-user-plus"></i>
              <span class="hide-menu">User Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/firm-provider-data" aria-expanded="false">
              <i class="ti ti-user-plus"></i>
              <span class="hide-menu">Firm Provider Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin-data" aria-expanded="false">
              <i class="ti ti-user-plus"></i>
              <span class="hide-menu">Admin Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/contact-data" aria-expanded="false">
            <i class="ti ti-file-description"></i>
              <span class="hide-menu">Contact Data</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/contact-archive" aria-expanded="false">
            <i class="ti ti-file-description"></i>
              <span class="hide-menu">Contact Data Archive</span>
            </a>
          </li>
@endif

@if(Auth::check() && (Auth::user()->hasRole('super_admin')))
          <li class="sidebar-item">
            <a class="sidebar-link" href="/register" aria-expanded="false">
            <i class="ti ti ti-user-plus"></i>
              <span class="hide-menu">Register</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  @endif
  <!-- Rest of the HTML content -->
</div>

             
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/login" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./register" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            -->
            
         
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->

    <!-- <div class="body-wrapper"> -->

      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
             
             <!-- <i class="ti ti-bell-ringing"></i> -->
              </a>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
             
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="/profile" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> -->
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Log Out') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
