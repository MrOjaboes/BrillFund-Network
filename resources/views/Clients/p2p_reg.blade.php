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
                    <div class="col-md-1"> </div>
                    <div class="col-md-6 col-12">
                        <h1 class="heading">P2P <b style="color:#FE740E">Registration</b><img
                                src="/FrontEnd/rockie/images/p2p.svg" width="50" alt=""></h1>
                        <p>
                            Register a new user with your activities <br> earnings and keep the registration fee.
                        </p>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    @if (session()->has('message'))
                    <div class="col-md-12 mt-3 position-relative">
                        <div class="box">
                            <div class="box-body">
                                <div style="background:#18d26b;color:white;" class="alert">
                                    <a href="#" class="close text-white" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('message') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
                {{-- First Section --}}
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-payout justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top: 18px">Activity Balance</h3>
                                </div>
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top:-20px">00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 5%"></div>
                <form class="form-horizontal form-element" action="{{ route('p2p.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                            @error('first_name')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                            @error('last_name')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="username" placeholder="User Name">
                            @error('username')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            @error('email')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="contact" placeholder="Phone Number">
                            @error('contact')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @error('password')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Re-Enter Password">
                        </div>
                    </div>


                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Register
                            User
                        </button>
                    </div>
                </form>
                <div style="margin-bottom: 8%"></div>
            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
