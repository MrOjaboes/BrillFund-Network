@extends('layouts.app')
@section('content')
    <!-- Header -->

    <!-- end Header -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading cph">Verified Coupon Code</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <p class="fs-18">/</p>
                        </li>
                        <li>
                            <p class="fs-18">Verified Coupon Code</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Coupon Section Start -->
    <section class="contact">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-md-12 mx-auto">
                    <div class="contact-main">
                        <div class="block-text center">
                            <h6 class="heading">Coupon Status</h6>
                            @if ($check)
                            <div class="text-center py-5 px-5">
                                @if ($check->used_status == 1)
                                   <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5><i>{{ $check->code }}</i></h5>
                                                <p>Used By :: {{ $check->used_by }}</p>
                                                <p>Reffered By ::{{ $check->reffered_by }}</p>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                @endif

                                @if ($check->status == 0)
                                <button type="submit" style="height: 50px;width:200px;" class="btn btn-danger">Not Activated</button>
                                @endif
                            </div>
                        @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coupon Section End -->
@endsection
