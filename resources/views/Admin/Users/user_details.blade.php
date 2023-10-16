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
                        <h1>Profile  / {{ $user->name }}</h1>
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
                                <div class="text-center">
                                    @if ($user->profile_photo == null)

                                        <img class="profile-user-img img-fluid img-thumbnail"
                                            src="/FrontEnd/Affiliate/images/no-avatar.png" alt="User photo" />
                                    @else
                                        <img class="profile-user-img img-fluid img-thumbnail"
                                            src="{{ asset('/storage/Profiles/'.$user->profile_photo)}}" alt="User Passport" />
                                    @endif
                                </div>

                                <p class="profile-username text-center">
                                       @if ($user->status == 0)
                                    <button class="btn btn-success">Active</button>
                                    @else
                                    <button class="btn btn-danger">Banned</button>
                                    @endif
                                     </p>
                                <p class="profile-username text-center">{{ $user->name }} </p>

                            </div>
                        </div>

                        {{-- dp --}}
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if ($user->dp == null)

                                        <img class="img-fluid img-thumbnail"
                                            src="/FrontEnd/Affiliate/images/no-avatar.png" alt="User photo" />
                                    @else
                                        <img class="img-fluid img-thumbnail"
                                            src="{{ asset('/storage/Profiles/DP/'.$user->dp)}}" alt="User Passport" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if ($user->user_type == 0)
                        <a class="btn btn-danger" href="{{ route('admin.users') }}">Back</a>
                        @else
                        <a class="btn btn-danger" href="{{ route('admin.vendors') }}">Back</a>
                        @endif
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">


                                    <li class="nav-item"><a class="nav-link" href="#login"
                                            data-toggle="tab">User Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#password"
                                            data-toggle="tab">Profile</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="login">
                                        <form class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{ $user->name }}" name="name" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" readonly value="{{ $user->email }}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly value="{{ $user->secret_password }}" name="email" class="form-control" id="inputEmail"
                                                        placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="password">
                                        <form class="form-horizontal">
                                            @csrf
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->fname }} {{ $user->lname }}"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Contact</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->contact }}"
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Facebook</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->facebook }}"
                                                        readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Whatsapp</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->whatsapp }}"
                                                        readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Twitter</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->twitter }}"
                                                        readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">LinkedIn</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->linkedin }}"
                                                        readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">Referal Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="{{ $user->referral_code }}"
                                                        readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=" " class="col-sm-2 col-form-label">About Me</label>
                                                <div class="col-sm-10">
                                                   <textarea name="" readonly class="form-control">{{ $user->note }}</textarea>
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
