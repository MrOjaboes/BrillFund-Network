@extends('layouts.app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading">Contact Us</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <p class="fs-18">/</p>
                        </li>
                        <li>
                            <p class="fs-18">Contact Us</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- Contact Start -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="image">
                        <img src="assets/images/layout/contact.jpg" alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <livewire:create-contact-us />
                </div>
            </div>
        </div>
    </section>
@endsection
