@extends('layouts.admin')
@section('content')
    @include('layouts.Partials.navbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Coupon Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Coupon Details</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span style="color:white;" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span style="color:white;" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        {{-- screenshot --}}
                        <div class="card card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if ($coupon->screenshot == null)

                                        <img class="img-fluid img-thumbnail"
                                            src="/FrontEnd/rockie/images/logo.svg" alt="coupon photo" />
                                    @else
                                        <img class="img-fluid img-thumbnail"
                                            src="{{ asset('/storage/Coupons/'.$coupon->screenshot)}}" alt="coupon Passport" />
                                    @endif
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-danger" href="{{ route('admin.coupons') }}">Back</a>

                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link" href="#login"
                                            data-toggle="tab">coupon Details</a></li>

                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="login">
                                        <form class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">From</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{ $coupon->user_name }}" name="name" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            @if ($coupon->used_status == 1)
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Used By</label>
                                                <div class="col-sm-10">
                                                    <input type="email" readonly value="{{ $coupon->email }}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            @endif
                                            @if ($coupon->status == 1)
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                   <span class="btn btn-success text-white">Activated</span>
                                                </div>
                                            </div>
                                            @else
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                   <button type="button" class="btn btn-warning text-white">Not Activated</button>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Amount</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{'N'. $coupon->amount }}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
