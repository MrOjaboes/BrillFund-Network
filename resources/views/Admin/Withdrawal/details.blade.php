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
                        <h1>Withdrawal Request From {{ $withdrawal->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">withdrawal</li>
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
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">Requested Amount</h3>

                            <h1 class="text-center"><b> ${{ $withdrawal->amount }}</b></h1>

                        <p>
                            <span>Status :: @if ($withdrawal->status == 0)
                        <button class="btn btn-warning">Pending</button>
                        @else
                        <button class="btn btn-success">Approved</button>
                            @endif</span>
                        </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <a class="btn btn-danger" href="{{ route('admin.withdrawals') }}">Back</a>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                               Payout Info
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="login">
                                        @php
                                            $profile = App\Models\Profile::where('user_id',$withdrawal->user_id)->first();
                                        @endphp

                                        <form class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">ACC. Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{ $profile->acct_name }}" name="name" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Acct Number</label>
                                                <div class="col-sm-10">
                                                    <input type="email" readonly value="{{ $profile->acct_number}}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Bank</label>
                                                <div class="col-sm-10">
                                                    <input type="email" readonly value="{{ $profile->bank}}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
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
