@extends('layouts.app')
@section('content')
    <!-- Header -->

    <!-- end Header -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading cph">Verify Coupon Code</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="https://www.learnify.ng">Home</a></li>
                        <li>
                            <p class="fs-18">/</p>
                        </li>
                        <li>
                            <p class="fs-18">Verify Coupon Code</p>
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
                            <h3 class="heading cph">Check Your Code</h3>
                            <p class="desc fs-20">Paste In Your Code to Confirm Your Code Status</p>
                        </div>

                        <form id="contact-form" method="post" action="{{ route('coupon.verify') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="coupon_code"
                                    placeholder="Paste code here..." required="true" />
                                    @error('coupon_code')
                                        <span style="color:red" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-action">Submit Now</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coupon Section End -->
@endsection
