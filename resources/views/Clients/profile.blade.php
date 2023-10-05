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

                    <div class="col-md-4">
                        <div class="ccard-profile justify-content-center align-items-center">
                            @if (Auth::user()->profile_photo == null)
                            <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
                            @else
                            <img src="{{ asset('/storage/Profiles/'.Auth::user()->profile_photo)}}" width="200" alt="">
                            @endif
                        </div>
                        <form action="{{ route('home.profile.photo') }}" method="POST" enctype="multipart/form-data" style="padding-top: 3%">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="file" accept="image/*" class="form-control" name="photo">
                                    @error('photo')
                                    <span style="color: #d21818">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                  <button class="btn" style="background:#FE740E;color:white">Upload</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-4"> </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    @if (session()->has('message'))
                        <div class="col-md-6 mt-3 position-relative">
                            <div style="background:#18d26b;color:white;" class="alert">
                                <a href="#" class="close text-white" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="col-md-6 mt-3 position-relative">
                            <div style="background:#d21818;color:white;" class="alert">
                                <a href="#" class="close text-white" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div style="margin-bottom: 3%"></div>

                <form class="form-horizontal form-element" action="{{ route('home.profile.update') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">UserName</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                name="name" placeholder="User Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                name="email" placeholder="Email">
                        </div>
                    </div>

                     <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Update
                            Details </button>
                    </div>
                </form>
                <div style="margin-bottom:3%"></div>
                <form class="form-horizontal form-element" action="{{ route('home.password.update') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Current Password</label>
                            <input type="password" class="form-control" name="oldpassword" placeholder="**********">
                            @error('oldpassword')
                          <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="**********">
                            @error('password')
                          <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Re-enter Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="**********">
                        </div>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Update
                            Password </button>
                    </div>
                </form>
                <div style="margin-bottom:8%"></div>
                <!-- /.content -->

            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
