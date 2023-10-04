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
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-center">
                                <h2>Edit <b style="color: #FE740E">Payout Details</b></h2>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
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
                <div style="margin-bottom: 5%"></div>

                <form class="form-horizontal form-element" action="{{ route('payout.update') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" value="{{ Auth::user()->profile->bank }}" name="bank" placeholder="Bank Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" value="{{ Auth::user()->profile->acct_number }}" name="acct_number" placeholder="Account Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" value="{{ Auth::user()->profile->acct_name }}" name="acct_name" placeholder="Account Name">
                        </div>
                    </div>
                    <div style="margin-bottom:5%"></div>
                    <div class="col-12">
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
