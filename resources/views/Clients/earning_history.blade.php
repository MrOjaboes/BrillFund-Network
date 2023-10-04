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

                <div class="text-white fs-16 text-capitalize">Earning History</div>

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
                            <a target="_blank" href="https://instagram.com/dexearn?igshid=MmIzYWVlNDQ5Yg=="
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
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <div class="box pt-3">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <div class="col-xl-12 my-20" style="height:500px;overflow-y:scroll;">
                                            <div class="d-flex justify-content-between flex-column align-items-start">
                                                <div class="d-flex justify-content-between align-items-end w-p100 mb-10">
                                                    <span class="fw-bolder text-dark fs-18">Recent Downlines</span>
                                                </div>

                                                <ul class="custom-list">
                                                @foreach ($earning as $activity)
                                                <li class="d-flex justify-content-between align-items-start">
                                                    <i data-feather="plus" class="text-success"></i>
                                                    <span class="text-start">{{ $activity->balance }}</span>
                                                    <span class="text-start">{{ $activity->description }}</span>
                                                    <span class="text-primary">{{ \Carbon\Carbon::parse($activity->created_at)->format('d D, M Y') }}
                                                        - {{ \Carbon\Carbon::parse($activity->created_at)->format('H:i') }}</span>
                                                </li>
                                                @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>




                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
