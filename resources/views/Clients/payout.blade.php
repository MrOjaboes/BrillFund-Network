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
                            <div class="ccard-payout justify-content-center align-items-center">

                                <div class="justify-content-center  w-p100">
                                    <span>Affiliate Balance</span>
                                </div>
                                <div class="justify-content-center  w-p100">
                                    <span>{{ '$'.$affiliate_balance->total }}
                                        @php
                                        $naira =  $affiliate_balance->total * 820
                                        @endphp
                                        ({{ 'N'.$naira }})</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div style="margin-bottom: 5%"></div>
                <h3>Withdraw Funds</h3>
                <form class="form-horizontal form-element" action="{{ route('home.payout.request') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="amount" placeholder="Amount">
                        </div>
                    </div>
                    <div style="margin-bottom:5%"></div>
                    <div class="row pt-5">

                        <div class="col-md-6" style="margin-left:1%;padding:5%;border-radius:1.5rem;background: linear-gradient(#D0D0D0A6 100%,#B5B5B500 0%)">
                            <h3>Current <b style="color: #FE740E">Payout Info</b></h3>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <p class="heading">BANK NAME</p>
                                    <p class="text-justify" style="color: #FE740E">{{ Auth::user()->profile->bank }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="heading">ACCOUNT NUMBER</p>
                                    <p class="text-justify" style="color: #FE740E">{{ Auth::user()->profile->acct_number }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="heading">ACCOUNT NAME</p>
                                    <p class="text-justify" style="color: #FE740E">{{ Auth::user()->profile->acct_name }}</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4"> </div>
                    </div>

                         <div style="margin-bottom: 5%"></div>
                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Place
                            Withdrawal </button>
                    </div>
               </form>
               <!-- /.content -->

            </div>
        </div>
        <div style="margin-bottom: 5%"></div>

    @include('layouts.Partials.bottombar')

    </div>
@endsection
