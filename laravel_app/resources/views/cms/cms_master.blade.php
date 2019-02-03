<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Batella | Admin Panel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <meta name="author" content="">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

        <!-- Modernizr-->
        <script src="{{ asset('lib/distribution/js/modernizr.custom.79639.js') }}"></script>
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <!-- Bootstrap core CSS-->
        <link href="{{ asset('lib/distribution/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="{{ asset('lib/distribution/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="{{ asset('lib/distribution/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Custom styles for this template-->
        <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">        
        <!-- My css-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>

        <script> var BASE_URL = "{{ url('') }}/"; </script>
        </head>
        <body id="page-top">

          <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      
            <a class="navbar-brand mr-1" href="{{ url('cms/dashboard') }}"><img width="100" class="img-fluid" src="{{ asset('lib/distribution/img/logo.png') }}" alt="..."> CMS</a>
      
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
              <i class="fas fa-bars"></i>
            </button>
      
            <!-- Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="{{ url('') }}" target="_blank">Back to site</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
              </li>
            </ul>
      
          </nav>
      
          <div id="wrapper">
      
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
              <li class="nav-item">
              <a class="nav-link" target="_blank" href="{{ url('') }}">
                <i class="fas fa-home"></i>
                  <span>Back to site</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('cms/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('cms/menu') }}">
                    <i class="fab fa-fw fa-elementor"></i>
                      <span>Menu</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('cms/content') }}">
                      <i class="far fa-fw fa-file-alt"></i>
                        <span>Content</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('cms/categories') }}">
                        <i class="far fa-fw fa-list-alt"></i>
                          <span>Categories</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('cms/products') }}">
                          <i class="fab fa-fw fa-product-hunt"></i>
                            <span>Products</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('cms/orders') }}">
                              <i class="fas fa-fw fa-tachometer-alt"></i>
                              <span>Orders</span>
                            </a>
                          </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                  <h6 class="dropdown-header">Login Screens:</h6>
                  <a class="dropdown-item" href="login.html">Login</a>
                  <a class="dropdown-item" href="register.html">Register</a>
                  <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Other Pages:</h6>
                  <a class="dropdown-item" href="404.html">404 Page</a>
                  <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="charts.html">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Charts</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tables.html">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Tables</span></a>
              </li>
            </ul>
      
            @yield('main_content')

      
          </div>
          <!-- /#wrapper -->
      
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>
      
          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="{{ url('user/logout') }}">Logout</a>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Bootstrap core JavaScript-->
          <script src="{{ asset('lib/distribution/vendor/jquery/jquery.min.js') }}"></script>
          <script src="{{ asset('lib/distribution/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      
          <!-- Core plugin JavaScript-->
          <script src="{{ asset('lib/distribution/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
      
          <!-- Page level plugin JavaScript-->
          <script src="{{ asset('lib/distribution/vendor/chart.js/Chart.min.js') }}"></script>
          <script src="{{ asset('lib/distribution/vendor/datatables/jquery.dataTables.js') }}"></script>
          <script src="{{ asset('lib/distribution/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
      
          <!-- Custom scripts for all pages-->
          <script src="{{ asset('lib/distribution/js/sb-admin.min.js') }}"></script>
      
          <!-- Demo scripts for this page-->
          <script src="{{ asset('lib/distribution/js/demo/datatables-demo.js') }}"></script>
          <script src="{{ asset('lib/distribution/js/demo/chart-area-demo.js') }}"></script>

          <!-- JavaScript files-->

          <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
          <script src="{{ asset('lib/distribution/vendor/popper.js/umd/popper.min.js') }}"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
          <!-- My Script -->
          <script src="{{ asset('js/script.js') }}"></script>
          @if(Session::has('sm'))
          <script>
          toastr.options.positionClass = '{{ Session::get('smpos') }}';
          toastr.success('{{ Session::get('sm') }}')
          </script>
          @endif
          <script>
          $('#article').summernote({
            height: 300
          });
          </script>
      
        </body>
</html>