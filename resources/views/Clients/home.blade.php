@extends('layouts.affiliate')

@section('content')
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.Partials.headerlogo')

            <!-- Header Navbar -->

        </header>

        @include('layouts.Partials.sidebar')
        @if (auth()->user()->status == 0)
            <div class="content-wrapper">
                <div class="container">
                    <!-- Main content -->
                    <div class="row" style="background: rgb(255,255,240);background: linear-gradient(45deg, rgba(255,255,240,1) 26%, rgba(220,14,254,1) 59%, rgba(220,14,254,1) 72%, rgba(220,14,254,1) 85%);">
                        <div class="col-md-8 ">
                            <div class="greetings mb-10 mt-10">
                                <div>
                                    <h1 class="heading"> Welcome Back,
                                        <b style="color: #FE740E">{{ Auth::user()->name }}</b>
                                    </h1>
                                    <p class="text-center">
                                        Track all your earnings and Use all of Brillfund Features at a go.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="justify-content-start mt-5">
                                <p class="fw-bolder text-dark">your referral link</p>
                                <div class="d-flex form-group">
                                    <input id="myRef" type="text" class="form-control border-0 bg-white"
                                        value="{{ Auth::user()->referal_code }}" disabled>
                                    <button id="copy"
                                        class="mx-2 waves-effect waves-light btn btn-sm copy-btn">
                                        <i data-feather="copy"></i>
                                    </button>
                                </div>
                                <div class="copy-feedback d-none">link copied!</div>
                            </div>
                        </div>
                    </div>

                    <section class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex justify-content-center">
                                    <div class="ccard justify-content-center align-items-center">
                                        {{-- <img src="/FrontEnd/Affiliate/images/map.png" class="map"
                                        alt="map"> --}}
                                        <div class="d-flex justify-content-between w-p100">
                                            <div style="color:white;">payout info <a href="{{ route('payout-details') }}"
                                                    class="btn" id="ebt">Edit details</a>
                                            </div>
                                            <div class="instant-card position-relative border-2 w-p10">
                                                <div> <img src="/FrontEnd/Affiliate/images/logo_card.svg" alt="chip">
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div class="d-flex w-p100">
                                            <img src="/FrontEnd/Affiliate/images/chip.png" alt="chip">
                                        </div>
                                        <div class="d-flex justify-content-between  w-p100">
                                            <span>BANK NAME</span>
                                            <span>ACCOUNT NUMBER</span>
                                        </div>
                                        <div class="d-flex justify-content-between  w-p100">
                                            <span>{{ Str::upper(Auth::user()->profile->bank) }}</span>
                                            <span>{{ Auth::user()->profile->acct_number }}</span>
                                        </div>

                                        <div class="d-flex justify-content-between w-p100">
                                            <span>CUSTOMER NAME</span>

                                        </div>
                                        <div class="d-flex justify-content-between w-p100">
                                            <span>{{ Str::upper(Str::limit(Auth::user()->profile->acct_name,15)) }}</span>
                                            <div style="color:white;"><a href="{{ route('home.payout') }}"
                                                class="btn" id="wbt">withdraw  <img src="/FrontEnd/rockie/images/crypto_market.svg" class=""alt=""></i></a>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div style="margin-bottom: 5%"></div>
                    <!-- /.content -->
                    <div class="row pt-5">
                        <div class="col-md-3"> </div>
                        <div class="col-md-6" id="hdetails"
                            style="padding:30px;border-radius:1.5rem;background: linear-gradient(#D0D0D0A6 100%,#B5B5B500 0%)">
                            <div class="row pt-3" id="hdetails1">
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Affiliate Balance</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{'$'.$affiliate_balance->total }}</h4>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Activities Balance</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{ $activity_balance . 'BP' }}</h4>
                                </div>
                            </div>
                            <div class="row" id="hdetails2">
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Direct Earnings</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{'$'. $direct_balance }}</h4>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Indirect Earnings</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{'$'. $indirect_balance }}</h4>
                                </div>
                            </div>
                            <div class="row" id="hdetails3">
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Payouts</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{'$'. $withdrawal }}</h4>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="heading" style="color:#01429E;">Refered</h4>
                                    <h4 class="text-justify" style="color: #FE740E">{{$networks->count() }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"> </div>
                    </div>
                    <div style="margin-bottom: 5%"></div>
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <div class="box pt-3">

                                <div class="box-body">
                                    <div class="box-heading">
                                        <h3 class="text-justify">Recent Activities</h3>
                                    </div>
                                    <div class="table-responsive" style="height: 200px;overflow-y:scroll;overflow-x:scroll">
                                        <table class="table table-sm invoice-archive table-striped mb-0"
                                            style="min-width: 550px;">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($activities as $data)
                                                    <tr>
                                                        <td>
                                                            @if ($data->type == 'withdrawal')
                                                                <b style="color: #0A094F"> {{ $data->content }}</b>
                                                            @else
                                                                <b style="color:#0A094F"> {{ $data->content }}</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($data->type == 'withdrawal')
                                                                <b style="color: red">
                                                                    {{ '-$' . $data->amount }}({{ 'N ' . $data->amount * 820 }})</b>
                                                            @else
                                                                <b style="color: #18d26b">
                                                                    {{ '+' . $data->amount . 'BP' }}</b>
                                                            @endif
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div style="margin-bottom: 5%"></div>
                </div>
            </div>
        @else
            <div class="text-center" style="padding: 15%">
                <h3>Account currently In-active, Kindly Contact Admin for Account Activation!</h3>
            </div>
        @endif
        @include('layouts.Partials.bottombar')

    </div>
@endsection
