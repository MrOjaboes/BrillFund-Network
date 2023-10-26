@extends('layouts.affiliate')

@section('content')
    @include('layouts.Partials.bottombar')
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
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6 col-12">
                        <h1>Brill Market Place</h1>
                    </div>
                    <div class="col-md-5">
                    </div>

                </div>

                <div style="margin-bottom: 3%"></div>
                {{-- First Section --}}
                <div class="row">
                    @foreach ($coins as $coin)
                    <div class="col-sm-2">
                        <div class="box">

                                <a href="{{ route('home.Crpto.details',$coin->name) }}" class="btn-custom w-p100" style="background-color:#FE740E;color:white;font-size:20px">{{ $coin->name }}</a>

                        </div>
                     </div>
                    @endforeach
                </div>
                <div style="margin-bottom: 3%"></div>

            </div>
        </div>


    </div>
@endsection
