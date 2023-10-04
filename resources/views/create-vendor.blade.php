@extends('layouts.app')
@section('content')
    <!-- Header -->

    <!-- end Header -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading">Vendor Sign Up</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <p class="fs-18">/</p>
                        </li>
                        <li>
                            <p class="fs-18">Vendor Sign Up</p>
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

                <livewire:store-vendor/>
            </div>
        </div>
    </section>

    <!-- Coupon Section End -->
@endsection
