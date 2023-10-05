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
                <div class="row">
                    <div class="col-lg-8 col-12 ">
                        <div class="greetings mb-10 mt-10">
                            <div>

                                <h1 class="heading"> Welcome Back,
                                    <b style="color: #FE740E">{{ Auth::user()->name }}</b>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="ref-box box ">
                            <div class="box-body">
                                <div class="justify-content-start">
                                    <p class="fw-bolder text-dark">Copy referral link</p>
                                    <div class="d-flex form-group">
                                        <input id="myRef" type="text" class="form-control border-0"
                                            value="{{ Auth::user()->referal_code }}" disabled>
                                        <button id="copy" class="mx-2 waves-effect waves-light btn btn-sm copy-btn">
                                            <i data-feather="clipboard"></i>
                                        </button>
                                    </div>
                                    <div class="copy-feedback d-none">link copied!</div>
                                </div>
                            </div>
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
                                        <div style="color:white;">payout info <a href="{{ route('payout-details') }}" class="btn"
                                                style="background:white;color:#01429e">Edit details</a></div>
                                        <div class="instant-card position-relative border-2 w-p10">
                                            <div> <img src="/FrontEnd/Affiliate/images/logo_card.svg" alt="chip"></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-p100">
                                        <img src="/FrontEnd/Affiliate/images/chip.png" alt="chip">
                                    </div>
                                    <div class="d-flex justify-content-center  w-p100">
                                        <span>Bank Name</span>
                                    </div>
                                    <div class="d-flex justify-content-center  w-p100">
                                        <span>{{ Auth::user()->profile->bank }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between w-p100">
                                        <span>Account Name</span>
                                        <span>Account Number</span>
                                    </div>
                                    <div class="d-flex justify-content-between w-p100">
                                        <span>{{ Auth::user()->profile->acct_name }}</span>
                                        <span>{{ Auth::user()->profile->acct_number }}</span>
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
                    <div class="col-md-6" style="padding:30px;border-radius:1.5rem;background: linear-gradient(#D0D0D0A6 100%,#B5B5B500 0%)">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <h4 class="heading">Affiliate Balance</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{ $affiliate_balance->total }}</h4>
                            </div>
                            <div class="col-md-6">
                                <h4 class="heading">Activities Balance</h4>
                                 <h4 class="text-justify" style="color: #FE740E">{{ $activity_balance.'BP' }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="heading">Direct Earnings</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{ $direct_balance }}</h4>
                            </div>
                            <div class="col-md-6">
                                <h4 class="heading">Indirect Earnings</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{ $indirect_balance }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="heading">Payouts</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{ $withdrawal }}</h4>
                            </div>
                            <div class="col-md-6">
                                <h4 class="heading">Refered</h4>
                                <h4 class="text-justify" style="color: #FE740E">{{  $networks->count() }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"> </div>
                </div>
                <div style="margin-bottom: 10%"></div>
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="box pt-3">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="col-xl-12 my-20" style="height:200px;overflow-y:scroll;">
                                        <div class="d-flex justify-content-between flex-column align-items-start">
                                            <div class="d-flex justify-content-between align-items-end w-p100 mb-10">
                                                <span class="fw-bolder text-dark fs-18">Recent Downlines</span>
                                            </div>

                                            <ul class="custom-list">
                                            @foreach ($activities as $activity)
                                            <li class="d-flex justify-content-between align-items-start">
                                                <i data-feather="plus" class="text-success"></i>
                                                <span class="text-start">{{ $activity->balance }}</span>
                                                <span class="text-start">{{ $activity->description }}</span>
                                                <span class="text-primary">{{ \Carbon\Carbon::parse($activity->created_at)->format('d D, M Y') }}
                                                    - {{ \Carbon\Carbon::parse($activity->created_at)->format('H:i') }}</span>
                                            </li>
                                            @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

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
