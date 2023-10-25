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
                    <div class="col-md-5">
                        <div class="ccard-profile justify-content-center align-items-center">
                            @if (Auth::user()->profile_photo == null)
                            <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
                            @else
                            <img src="{{ asset('/storage/Profiles/'.Auth::user()->profile_photo)}}" width="200" alt="">
                            @endif
                        </div>

                        {{-- DP section --}}
                        <div class="ccard-dp" id="ccard-dp">
                            @if (Auth::user()->dp == null)
                            <img src="/FrontEnd/rockie/images/logo.svg" class="img-fluid img-thumbnail" width="500" alt="">
                            @else
                            <img src="{{ asset('/storage/Profiles/DP/'.Auth::user()->dp)}}" width="500" alt="">
                            @endif
                        </div>
                        <form action="{{ route('freelancing.dp') }}" method="POST" enctype="multipart/form-data" style="margin-top: 3%">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="file" accept="image/*" class="form-control" name="photo">
                                    @error('photo')
                                    <span style="color: #d21818">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                  <button class="btn-custom" style="background:#FE740E;color:white">Upload</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-7">
                       <div class="box">
                        <div class="box-body">
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
                            </div>
                            <form class="form-horizontal form-element" action="{{ route('freelancing.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->fname }}"
                                            name="fname" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->lname }}"
                                            name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                            name="name" placeholder="User Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                            name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">Contact</label>
                                        <input type="number" class="form-control" value="{{ Auth::user()->contact }}"
                                            name="contact" placeholder="Contact">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">LinkedIn</label>
                                        <input type="url" class="form-control" value="{{ Auth::user()->linkedin }}"
                                            name="linkedin" placeholder="LinkedIn">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">Facebook</label>
                                        <input type="url" class="form-control" value="{{ Auth::user()->facebook }}"
                                            name="facebook" placeholder="Facebook">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Twitter</label>
                                        <input type="url" class="form-control" value="{{ Auth::user()->twitter }}"
                                            name="twitter" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="">WhatsApp Link</label>
                                        <input type="url" class="form-control" value="{{ Auth::user()->whatsapp }}"
                                            name="whatsapp" placeholder="whatsapp">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="">About Me</label>
                                       <textarea name="note" class="form-control" value="{{ Auth::user()->note }}" id="" cols="30" rows="10">{{ Auth::user()->note }}</textarea>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Update
                                        Details </button>
                                </div>
                            </form>
                        </div>
                       </div>
                    </div>

                </div>

                <div style="margin-bottom: 6%"></div>

                <!-- /.content -->

            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
