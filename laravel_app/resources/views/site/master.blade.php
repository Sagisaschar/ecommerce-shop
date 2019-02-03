<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Batella | @if( ! empty($title) ) {{ $title }} @endif</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/font-awesome/css/font-awesome.min.css') }}">
        <!-- Bootstrap Select-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
        <!-- Price Slider Stylesheets -->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/nouislider/nouislider.css') }}">
        <!-- Custom font icons-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/custom-fonticons.css') }}">
        <!-- Google fonts - Poppins-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
        <!-- owl carousel-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/owl.carousel/assets/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/owl.carousel/assets/owl.theme.default.css') }}">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/style.default.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/custom.css') }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <!-- My css-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Modernizr-->
        <script src="{{ asset('lib/distribution/js/modernizr.custom.79639.js') }}"></script>
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script> var BASE_URL = "{{ url('') }}/"; </script>
        </head>
    <body>
        <!-- navbar-->
        <header class="header"> @include('inc.navbar') </header>
        {{-- @if ($err_top && $errors->any())
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            
        @endif --}}

        @yield('content')

        <!-- Footer-->
        <footer class="main-footer"> @include('inc.footer') </footer>
        <!-- JavaScript files-->
        <script src="{{ asset('lib/distribution/vendor/jquery/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('lib/distribution/vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/jquery-parallax.js/parallax.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/jquery-countdown/jquery.countdown.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqZHUbvtlYwfMVfbS5wstsRKoUi6ldgzw"></script>
        <!-- Main Template File-->
        <script src="{{ asset('lib/distribution/js/front.js') }}"></script>
        <!-- My Script -->
        <script src="{{ asset('js/script.js') }}"></script>
        @if(Session::has('sm'))
        <script>
        toastr.options.positionClass = '{{ Session::get('smpos') }}';
        toastr.success('{{ Session::get('sm') }}')
        </script>
        @endif
    </body>
</html>