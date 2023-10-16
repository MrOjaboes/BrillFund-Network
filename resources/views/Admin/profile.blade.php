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
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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


                                <h3 class="profile-username text-center"><b>{{ Auth::user()->name }}</b></h3>




                                  </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">


                                    <li class="nav-item"><a class="nav-link" href="#login"
                                            data-toggle="tab">Login Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#password"
                                            data-toggle="tab">Password</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#payment"
                                            data-toggle="tab">Payment Details</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="login">
                                        <form class="form-horizontal" method="POST" action="{{ route('admin.login.update') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Update Details</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="password">
                                        <form class="form-horizontal" action="{{ route('admin.password') }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Current Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="oldpassword"
                                                        placeholder="********">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="********">
                                                        @error('password')
                                                <span style="color: red">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="confirm_password" class="form-control" id=" "
                                                        placeholder="********">
                                                </div>

                                            </div>



                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="payment">
                                        <form class="form-horizontal" action="{{ route('admin.payment') }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Bank Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ $transfer_details->bank }}" class="form-control" name="bank"
                                                        placeholder="Bank">
                                                        @error('bank')
                                                        <span style="color: red">
                                                            <strong style="color: red">{{ $message }}</strong>
                                                        </span>
                                                              @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Account Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ $transfer_details->acct_name }}" class="form-control" name="acct_name"
                                                        placeholder="Account Name">
                                                        @error('acct_name')
                                                <span style="color: red">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Account Number</label>
                                                <div class="col-sm-10">
                                                    <input type="number" value="{{ $transfer_details->acct_number }}" name="acct_number" class="form-control" id=" "
                                                        placeholder=" Account Number">
                                                        @error('acct_number')
                                                        <span style="color: red">
                                                            <strong style="color: red">{{ $message }}</strong>
                                                        </span>
                                                              @enderror
                                                </div>

                                            </div>



                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Update Details</button>
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
