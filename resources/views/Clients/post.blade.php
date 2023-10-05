@extends('layouts.affiliate')

@section('content')
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.Partials.headerlogo')

            <!-- Header Navbar -->
            <nav id="changeNavbarColor" class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" role="button" id="backButton"
                                class="waves-effect waves-light text-white" title="left">
                                <i data-feather="chevron-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-white fs-16 text-capitalize">Daily Post</div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="https://www.learnify.ng/account/notifications"
                                class="waves-effect waves-light text-white" title="Notification">
                                <i data-feather="bell"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        @include('layouts.Partials.sidebar')
        <div class="content-wrapper ">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                   <livewire:clients.daily-post-page />
                </section>
                <!-- /.content -->
            </div>
        </div>     

        @include('layouts.Partials.bottombar')

    </div>
@endsection
