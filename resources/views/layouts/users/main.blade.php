<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axela Creative Agenacy & Portfolio HTML Template </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/fontawesome-5.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/unicons.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/metismenu.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/hover-revel.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/style.css')}}">
</head>

<body>
        <!-- start header area -->
    <!-- header one -->
    <header class="header-one header--sticky">
        @include('layouts.users.header')
    </header>
    <!-- header one End -->
    <!-- ENd Header Area -->

    <div id="side-bar" class="side-bar">
        @include('layouts.users.sidebar')
    </div>

    <div id="anywhere-home"></div>

    @yield('content')

    <!-- start header area -->
    <!-- footer area start -->
    <div class="rts-footer-area-one rts-section-gap footer-one-bg">
        @include('layouts.users.footer')
    </div>
    
    <!-- rts-copyright-area -->
    <div class="rts-copyright-area ptb--30 ptb_sm--15">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyu-right-wrapper">
                        <div class="left single">
                            <a href="#">Privacy & Terms.</a>
                            <a href="#" class="ml--20">Contact Us</a>
                        </div>
                        <div class="left single">
                            <p>Copyright @2022 Axela. by <a href="#">ReacThemes</a></p>
                        </div>
                        <div class="left single">
                            <a href="#">About Us</a>
                            <a href="#" class="ml--20">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-copyright-area ENd -->
    <!-- ENd Header Area -->
    
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>
    
    
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    
    
    <!-- scripts start form hear -->
    <script src="{{asset('users/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/jqueryui.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/waypoint.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/swiper.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/sal.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/fancybox.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/metismenu.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/marquery.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/waw.js')}}"></script>
    
    
    <script src="{{asset('users/assets/js/plugins/hover-revel.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/twinmax.js')}}"></script>
    
    
    <script src="{{asset('users/assets/js/plugins/contact.form.js')}}"></script>
    
    
    <!-- main Js -->
    <script src="{{asset('users/assets/js/main.js')}}"></script>
    <!-- scripts end form hear -->
</body>

</html>