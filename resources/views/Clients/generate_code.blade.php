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
                <div class="row pt-5">

                    <div class="col-md-6">
                        <h1 class="heading">Generate <b style="color:#FE740E">Code</b></h1>

                    </div>
                    <div class="col-md-5"></div>
                </div>

                {{-- First Section --}}
                <div class="row">
                    <div class="col-md-6" id="gc">
                        <div class="mg-left d-flex justify-content-center">
                            <div class="ccard-payout justify-content-center align-items-center" id="mtp1">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top: 18px">Affiliate Balance</h3>
                                </div>
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top:-20px">{{'$'.$affiliate_balance->total}}({{'N'.$affiliate_balance->total * 820}})</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <small style="color: #d21818">Minimum Number Of Codes Allowed 5(five) Codes</small> <br>
                <small style="color: #d21818">Minimum Amount Required for Code Generation Is N23,500 For 5(five) Codes</small>
                <div style="margin-bottom: 3%"></div>
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
                {{-- Form Section --}}
                <div class="row">
                    <div class="col-md-12">

                        <form class="form-horizontal form-element" action="{{ route('home.generate-code.send') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            {{-- <div class="form-group row">
                                <div class="col-sm-6">
                                    <select name="number_of_code" class="form-control" id="">
                                        <option value="">--- Select Number Of Code(s) ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @error('number_of_code')
                                        <span style="color:red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    {{-- <select name="amount_paid" class="form-control" id="">
                                        <option value="">--- Amount Paid ---</option>
                                        <option value="5000">5000</option>
                                        <option value="10000">10000</option>
                                        <option value="15000">15000</option>
                                        <option value="20000">20000</option>
                                        <option value="25000">25000</option>
                                    </select> --}}
                                    <input type="number" class="form-control" name="amount_paid" placeholder="Amount(One code costs N4700)">
                                    @error('amount_paid')
                                        <span style="color:red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                   <label for="">Upload Reciept Of Payment</label>
                                   <input type="file" accept="image/*" class="form-control" name="reciept" id="">
                                    @error('reciept')
                                        <span style="color:red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Generate Code
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Form Section --}}
                <div style="margin-bottom: 3%"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-payout justify-content-center align-items-center" id="mtp2">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="margin-top:8px">Make Payment Through Transfer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Transfer Section --}}
                <div style="margin-bottom: 3%"></div>
            <div class="row pt-5">
                    <div class="col-md-6" style="padding:30px;border-radius:1.5rem;background: linear-gradient(#D0D0D0A6 100%,#B5B5B500 0%)">
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <h4 class="heading">Bank Name</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{ $transfer_details->bank }}</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="heading">Account Name</h4>
                                 <h4 class="text-justify" style="color: #FE740E"> {{ $transfer_details->acct_name }}</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="heading">Account Number</h4>
                                <h4 class="text-justify" style="color: #FE740E"> {{ $transfer_details->acct_number }}</h4>
                            </div>
                        </div>
                        </div>
                    <div class="col-md-3"> </div>
                </div>
                {{-- Transfer Section --}}
            </div>
            <div style="margin-top: 10%"></div>
        </div>

        @include('layouts.Partials.bottombar')

    </div>
@endsection
