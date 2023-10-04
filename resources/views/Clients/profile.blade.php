@extends('layouts.affiliate')

@section('content')
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.Partials.headerlogo')

            <!-- Header Navbar -->

        </header>

        @include('layouts.Partials.sidebar')
        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="ccard-profile justify-content-center align-items-center">
                            <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div style="margin-bottom: 5%"></div>

                <form class="form-horizontal form-element" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                name="name" placeholder="User Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                name="email" placeholder="Email">
                        </div>
                    </div>

                    <div style="margin-bottom:5%"></div>
                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Update
                            Details </button>
                    </div>
                </form>

                <!-- /.content -->

            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
