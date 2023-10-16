<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Brillfund Network</title>
    <meta name="description" content="BrillFund Network">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/FrontEnd/rockie/app/dist/app.css" />
    <link rel="stylesheet" href="/FrontEnd/rockie/app/dist/magnific-popup.css" />
    <link rel="stylesheet" href="../unpkg.com/swiper%4010.2.0/swiper-bundle.min.css" />
    <!-- End Style CSS -->

    <link rel="shortcut icon" href="/FrontEnd/rockie/images/logo.svg" />
    <link rel="apple-touch-icon-precomposed" href="/FrontEnd/rockie/images/logo.svg" />
    <script type='text/javascript' src='../pl18200534.highrevenuegate.com/4f/07/82/4f07828118d9983f02124708f3c89d02.js'>
    </script>

    @livewireStyles
</head>

<body class="body header-fixed home-3">
    <!-- Header -->
    <header id="header_main" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header__body d-flex justify-content-between">
                        <div class="header__left">
                            <div class="logo">
                                <a class="light" href="{{ url('/') }}">
                                    <img id="site-logo" src="/FrontEnd/rockie/images/logo.svg" alt="logo"
                                        width="150" data-retina="/FrontEnd/rockie/images/logo.svg"
                                        data-width="150" />
                                </a>
                                <a class="dark" href="{{ url('/') }}">
                                    <img src="/FrontEnd/rockie/images/logo.svg" alt="logo" width="150"
                                        data-retina="/FrontEnd/rockie/images/logo.svg" data-width="150" />
                                </a>
                            </div>
                            <div class="left__main">
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Other Links</a>

                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ route('activation.code') }}">Purchase Coupon Code</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('coupon.verify') }}">Verify Coupon Code</a>
                                                </li>
                                                {{-- <li class="menu-item">
                                                    <a href="{{ route('howitworks') }}">How it Works</a>
                                                </li> --}}
                                                <li class="menu-item">
                                                    <a href="{{ route('topEarners') }}">Top Earners</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a href="{{ route('adverts') }}">Advert</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('contactUs') }}">Contact Us</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#"> Pages </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ route('terms') }}">Terms and Conditions</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ route('privacy') }}">Privacy Policy</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                                <!-- /#main-nav -->
                            </div>
                        </div>

                        <div class="header__right">
                            <div class="menu-item">
                                <a href="{{ route('login') }}" class="btn" style="border:none;width:100px;background:#FE740E;color:white"> Login </a> /
                                <a href="{{ route('register') }}" class="btn" style="border:none;width:100px;background:#FE740E;color:white"> Sign up </a>
                            </div>
                            <div class="mode-switcher">
                                <a class="sun" href="#" onclick="switchTheme()">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                                            stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 1V2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 13.7271V14.9998" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 3.04932L3.9532 3.95295" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 12.0469L12.9505 12.9505" stroke="#23262F"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 8H2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7273 8H15" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 12.9505L3.9532 12.0469" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 3.95295L12.9505 3.04932" stroke="#23262F"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="moon" onclick="switchTheme()">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                                            stroke="white" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            {{-- <div class="wallet">
                                <a href="{{ route('login') }}" class="btn" style="border:none;width:100px;background:#FE740E;color:white"> Login </a>
                            </div> --}}
                            <div class="mobile-button"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end Header -->

    <main id="main" class="">
        @yield('content')

    </main><!-- End #main -->


    <!-- Footer Start -->
    <footer class="footer style-2">
        <div class="container">
            <div class="footer__main">
                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="info">
                            <a href="{{ url('/') }}" class="logo">
                                <img style="width:200px;margin-left:20px" src="/FrontEnd/rockie/images/logo.svg"
                                    alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="widget">
                            <div class="widget-link">
                               <p class="fs-20 desc">Join the Fastest growing innovation platform now and make money from the comfort of your home</p>
                               <a href="" class="btn" style="background: #FE740E;color:white">Know more/Default</a>
                            </div>
                            <div class="widget-link s2" style="color: #000000">
                                <h6 class="title" style="color: #000000">RESOURCES</h6>
                                <ul>
                                    <li><a href="{{ route('adverts') }}">About</a></li>
                                    <li><a href="{{ route('topEarners') }}">T’s and C’s</a></li>
                                    <li><a href="{{ route('activation.code') }}">Contact</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="widget">
                            <div class="widget-link s2" style="color: #000000">
                                <h6 class="title" style="color: #000000">Special Features</h6>
                                <ul>
                                    <li><a href="{{ route('adverts') }}">VTU Platform</a></li>
                                    <li><a href="{{ route('topEarners') }}">Casino Platfor</a></li>
                                    <li><a href="{{ route('activation.code') }}">Token Info</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="footer__bottom" style="display: flex;flex-direction:row;justify-content:space-evenly">
                <p class="text-dark">
                    ©2023 <a href="">brillfund.com</a>. All rights reserved. Terms of Service | Privacy Terms
                </p>
                <p class="text-dark">
            <span>
                <a href="http://instagram.com/Learnify.ng" target="_blank"> <span class="fa-brands fa-instagram" style="color:#FE740E;"></span>jjjjj</a>
                </span>
            <span>
                <a href="http://instagram.com/Learnify.ng" target="_blank"> <span class="fa-brands fa-instagram" style="color:#FE740E;"></span>jjjjj</a>
                </span>
            <span>
                <a href="http://instagram.com/Learnify.ng" target="_blank"> <span class="fa-brands fa-instagram" style="color:#FE740E;"></span>jjjjj</a>
                </span>
                </p>

            </div>
        </div>
    </footer>
    <!-- Footer End -->
    @livewireScripts
    <script src="/FrontEnd/rockie/app/js/aos.js"></script>
    <script src="/FrontEnd/rockie/app/js/jquery.min.js"></script>
    <script src="/FrontEnd/rockie/app/js/jquery.easing.js"></script>
    <script src="/FrontEnd/rockie/app/js/popper.min.js"></script>
    <script src="/FrontEnd/rockie/app/js/bootstrap.min.js"></script>
    <script src="/FrontEnd/rockie/app/js/app.js"></script>
    <script src="/FrontEnd/rockie/app/js/jquery.peity.min.js"></script>
    <script src="/FrontEnd/rockie/app/js/switchmode.js"></script>
    <script src="/FrontEnd/rockie/app/js/jquery.magnific-popup.min.js"></script>
    <script src="../unpkg.com/swiper%4010.2.0/swiper-bundle.min.js"></script>
    <script src="/FrontEnd/rockie/app/js/swiper.js"></script>
    <link rel="stylesheet" href="vendor/iziToast/iziToast.min.css">
    <script src="vendor/iziToast/iziToast.min.js"></script>


    <script>
        'use strict';

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "bottomRight"
            });
        }
    </script>
</body>

<!-- Mirrored from www.learnify.ng/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 05:45:43 GMT -->

</html>
