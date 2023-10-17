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
                                    <h3 style="margin-top:-20px">{{ '$' . $affiliate_balance->total }}</h3>
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
                                    <span>

                                        <a href="" class="btn" data-bs-target="#transfer" data-bs-toggle="modal"
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
                                    <span><a href="" class="btn" data-bs-target="#data" data-bs-toggle="modal" style="background:#ffffff;color:#FE740E">Buy
                                            Now</a></span>
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
                                    <span><a href="" class="btn" style="background:#ffffff;color:#FE740E">Buy
                                            Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="col-md-1"></div>
                </div>
                <div style="margin-bottom: 8%"></div>
            </div>
        </div>

{{-- Recharge Airtime --}}
        <div class="modal fade" id="transfer" tabindex="-1" data-bs-keyboard="false" role="dialog"
            aria-labelledby="transfer" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <form class="form-horizontal form-element col-12" method="POST" action="{{ route('home.vtu.recharge') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <div class="edit-form">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="form-control">
                                            <option value="">--- Network ---</option>
                                            <option value="glo">Glo</option>
                                            <option value="mtn">Mtn</option>
                                            <option value="airtel">Airtel</option>
                                            <option value="etisalat">Etisalat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="number" min="0" class="form-control" id="amount"
                                            name="amount" placeholder="Amount" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" style="background:#FE740E;color:#ffffff"
                                            class="btn-custom w-p100 waves-effect waves-dark">Proceed</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
{{-- Recharge Airtime --}}

{{-- Recharge Data --}}
<div class="modal fade" id="data" tabindex="-1" data-bs-keyboard="false" role="dialog"
aria-labelledby="data" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
    <form class="form-horizontal form-element col-12" method="POST" action="{{ route('home.vtu.recharge') }}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="edit-form">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option value="">--- Network ---</option>
                                <option value="glo">Glo</option>
                                <option value="mtn">Mtn</option>
                                <option value="airtel">Airtel</option>
                                <option value="etisalat">Etisalat</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option value="">--- Network ---</option>
                                <option value="500">500 = MTN SME Data 500MB – 30 Days</option>
                                <option value="1024">M1024 = MTN SME Data 1GB – 30 Days</option>
                                <option value="2024">M2024 = MTN SME Data 2GB – 30 Days</option>
                                <option value="3000">3000 = MTN SME Data 3GB – 30 Days</option>
                                <option value="5000">5000 = MTN SME Data 5GB – 30 Days</option>
                                <option value="10000">10000 = MTN SME Data 10GB – 30 Days</option>
                                <option value="1500">mtn-20hrs-1500 = MTN Data 6GB – 7 Days</option>
                                <option value="8000">mtn-30gb-8000 = MTN Data 30GB – 30 Days</option>
                                <option value="10000">mtn-40gb-10000 = MTN Data 40GB – 30 Days</option>
                                <option value="15000">mtn-75gb-15000 = MTN Data 75GB – 30 Days</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" style="background:#FE740E;color:#ffffff"
                                class="btn-custom w-p100 waves-effect waves-dark">Proceed</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
</div>
{{-- Recharge Data --}}
        @include('layouts.Partials.bottombar')

    </div>
@endsection
