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
                    <h3 class="heading">Top Earners</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">

                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><p class="fs-18">/</p></li>
                        <li><p class="fs-18">Top Earners</p></li>
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

                        <div class="row gy-4">

                            @foreach ($earners as $earner)
                            <div class="col col-md-4">
                                <div class="custom-list d-flex align-items-center p-2">
                                    <img class="list-avatar"
                                        src="/FrontEnd/rockie/images/logo.svg"alt="">
                                    <div class="d-flex flex-grow-1 justify-content-between align-items-center ms-3">
                                        <div class="">
                                            <div class="list-title text-dark fw-bold fs-3">{{ $earner->name }}</div>
                                            <div class="list-desc text-white fs-4">
												@if ($earner->affiliateBalance->total != null && $earner->affiliateBalance->total != 0)
                                                {{'$'. $earner->affiliateBalance->total}}
                                                @endif
											</div>
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
