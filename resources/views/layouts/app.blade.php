<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('app')}}/assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="{{asset('app')}}/assets/img/logo.jpeg"/>
    <title>{{ config('app.name', 'Laravel') }} || {{Auth::user()->name}}</title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="{{asset('app')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{asset('app')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <link href="{{asset('app')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="{{asset('app')}}/assets/css/argon-dashboard.css?v=2.0.4"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>

  <body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 position-absolute w-100" style="background: #809964;"></div>
    @include('layouts.menus')
    <main class="main-content position-relative border-radius-lg">
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
        id="navbarBlur"
        data-scroll="false"
      >
        <div class="container-fluid py-1 px-3">
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-white font-weight-bold px-0"
                >
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">
                    {{ Auth::user()->name }}
                  </span>
                </a>
              </li>
              <!-- <li class="nav-item d-flex align-items-center">
                <a
                  href="index.php?logout"
                  class="nav-link text-white font-weight-bold px-2"
                >
                  <span class="d-sm-inline d-none">
                    Logout
                  </span>
                </a>
              </li> -->
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-white p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @yield('content')
        <footer class="footer pt-3">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-12 mb-lg-0 mb-4">
                <div
                  class="copyright text-center text-sm text-muted text-lg-start"
                >
                  © <b>{{ config('app.name', 'Laravel') }}</b>
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with <i class="bi bi-heart-fill  "></i> by
                  <a
                    href="#"
                    class="font-weight-bold"
                    target="_blank"
                    >Solverra IT</a
                  >
                  for a better web.
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{asset('app')}}/assets/js/core/popper.min.js"></script>
    <script src="{{asset('app')}}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{asset('app')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{asset('app')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{asset('app')}}/assets/js/plugins/chartjs.min.js"></script>
    <script src="{{asset('app')}}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  </body>
</html>
