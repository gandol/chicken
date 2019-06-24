<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} || HOME</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{URL::asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
  </head>
  <body>
    <div class="container-scroller">
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="/">
                        <h2>Admin Chickenland</h2>
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="/">
                        <h3>Admin Chickenland</h3>
                    </a>
                </div>
            </ul>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown  d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown">
                  Setting
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Setting</p>
                      <a class="dropdown-item" href="/rekening">
                        <i class="mdi mdi-box-shadow text-primary"></i>
                        Rekening
                      </a>
                      <a class="dropdown-item" href="/gojek">
                        <i class="mdi mdi-bowling text-primary"></i>
                        Gojek
                      </a>
                  </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name">{{$email}}</span>
                  <input type="hidden" name="sessionToken" id="sessionToken" value="{{$tokenLogin}}">
                    <span class="online-status"></span>
                    <img src="{{URL::asset('images/faces/face28.png')}}" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" id="tombolLogout">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <?php
      if(Request::is('/')==false){
          ?>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                        <i class="mdi mdi-view-dashboard menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">
                        <i class="mdi mdi-cart-outline menu-icon"></i>
                        <span class="menu-title">Produk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transaksi">
                        <i class="mdi mdi-square-inc-cash menu-icon"></i>
                        <span class="menu-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">
                        <i class="mdi mdi-newspaper menu-icon"></i>
                        <span class="menu-title">Berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jumlahpengguna">
                        <i class="mdi mdi-folder-account menu-icon"></i>
                        <span class="menu-title">Pengguna</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-cube-outline menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/basic_elements.html" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Form Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/charts/chartjs.html" class="nav-link">
                            <i class="mdi mdi-finance menu-icon"></i>
                            <span class="menu-title">Charts</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/tables/basic-table.html" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Tables</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/icons/mdi.html" class="nav-link">
                            <i class="mdi mdi-emoticon menu-icon"></i>
                            <span class="menu-title">Icons</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-codepen menu-icon"></i>
                            <span class="menu-title">Sample Pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="docs/documentation.html" class="nav-link">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Documentation</span></a>
                    </li> --}}
                    </ul>
                </div>
            </nav>
          <?php
      }
      ?>
    </div>
    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
                @yield('content')
                <footer class="footer">
                    <div class="footer-wrap">
                        <div class="w-100 clearfix">
                            <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © {{date('Y')}} </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart-outline"></i></span>
                        </div>
                    </div>
                </footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{URL::asset('js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{URL::asset('js/template.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="{{URL::asset('js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('js/progressbar.min.js')}}"></script>
		<script src="{{URL::asset('js/chartjs-plugin-datalabels.js')}}"></script>
		<script src="{{URL::asset('js/raphael-2.1.4.min.js')}}"></script>
		<script src="{{URL::asset('js/justgage.js')}}"></script>
    <!-- Custom js for this page-->
    <script src="{{URL::asset('js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>
