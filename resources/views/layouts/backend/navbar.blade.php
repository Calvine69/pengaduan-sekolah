  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengaduan Sekolah</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('regal/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('regal/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('regal/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/scss/fontawesome.scss') }}">
    <link rel="stylesheet" href="{{ asset('regal/vendors/flag-icon-css/css/flag-icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('regal/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('regal/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('regal/vendors/jquery-bar-rating/fontawesome-stars.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo"  ><img src="{{ asset('regal/images/icons8-logo.svg') }}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('regal/images/icons8-logo.svg') }}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item dropdown d-flex mr-4 ">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="icon-cog"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
                <a class="dropdown-item preview-item">   
                  <button class="btn">
                    <i class="icon-head"></i> {{ Auth::user()->name }}
                  </button>            
                </a>
                <!-- Form for logout -->
                <form method="post" action="{{ route('logout') }}" class="dropdown-item preview-item">
                  @csrf
                  @method('post')
                  <button type="submit" class="btn">
                    <i class="icon-inbox"></i> Logout
                  </button>  
                </form>
              </div>
            </li>
            
          </ul>
        </div>
      </nav>