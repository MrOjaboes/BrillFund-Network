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
                        <img src="/FrontEnd/rockie/images/vtu.svg" width="200" alt="">
                    </div>
                    <div class="col-md-5">
                    </div>

                </div>

                <div style="margin-bottom: 3%"></div>
{{-- First Section --}}
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-payout justify-content-center align-items-center">

                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top: 18px">Affiliate Balance</h3>

                                </div>
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top:-20px">{{ '$'.$affiliate_balance->total }}</h3>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div style="margin-bottom: 3%"></div>
                {{-- Second Section --}}
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-vtu justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">Airtime Recharge</h3>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                    <span><a href="" class="btn"
                                        style="background:#ffffff;color:#FE740E">Buy Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-vtu justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">Data Services </h3>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                    <span><a href="" class="btn"
                                        style="background:#ffffff;color:#FE740E">Buy Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div style="margin-bottom: 3%"></div>
                {{-- Third Section --}}
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-vtu justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">Cable Subscription </h3>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                    <span><a href="" class="btn"
                                        style="background:#ffffff;color:#FE740E">Buy Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-vtu justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">Data Services </h3>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                    <span><a href="" class="btn"
                                        style="background:#ffffff;color:#FE740E">Buy Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div style="margin-bottom: 8%"></div>
        </div>
    </div>




    @include('layouts.Partials.bottombar')

    </div>
@endsection
