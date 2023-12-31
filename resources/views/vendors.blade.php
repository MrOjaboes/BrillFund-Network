@extends('layouts.app')

<style>
    .custom-list {
        background: #ffc872;
        border-radius: 10px;
    }

    .list-avatar {
        background: #FE740E;
        border-radius: 50%;
        border: 2px solid #fff;
        padding: 7px;
        width: 60px;
        object-fit: cover;
        height: 60px;
    }
</style>

@section('content')
    <!-- Header -->

    <!-- end Header -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading">Get Code</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">

                        <li>
                            <p class="fs-18"><a href="{{ route('register') }}" class="btn" style="background:#FE740E ;color:white">Sign Up</a> as a vendor</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Start -->
    <section class="services-2">
        <div class="container px-md-5">
            <div class="col-lg-12 pl-70 md-pl-0">
                <div class="content-wrap">
                    <div class="sec-title mb-35">
                        <h5 class="cph">
                            Message Any Vendor To Get Your Code
                        </h5>
                        <div class="row gy-4">
                           @foreach ($vendors as $vendor)
                           <div class="col col-md-4">
                            <div class="custom-list d-flex align-items-center p-2">
                                <img class="list-avatar"
                                    src="/FrontEnd/rockie/images/logo.svg" alt="">
                                <div class="d-flex flex-grow-1 justify-content-between align-items-center ms-3">
                                    <div class="">
                                        <div class="list-title text-dark  fw-bold fs-3">{{ Str::upper($vendor->name) }}</div>
                                        <div class="list-desc text-primary fs-6">
                                            {{ $vendor->coupons()->where('status',1)->count() }}
                                        </div>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=+{{ $vendor->contact }}&amp;text=Hello%2C%20Good%20day%20-%20I%20want%20To%20Purchase%20Brillfund%20Coupon%20Code"
                                            target="_blank"><img width="70"
                                                src="/FrontEnd/rockie/images/whatsapp.gif"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                           @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    <!-- Footer Start -->
@endsection
