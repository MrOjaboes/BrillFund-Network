@extends('layouts.admin')
@section('content')
    @include('layouts.Partials.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.dailypost') }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"> <i class="fa fa-sticky-note" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Posts</span>
                                    <span class="info-box-number">
                                        {{ $posts /100 }}
                                        <small>%</small>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.deposits') }}">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-dollar-sign" aria-hidden="true"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Deposits</span>
                                    <span class="info-box-number">${{ $deposits }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.withdrawals') }}">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-dollar-sign"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Withdrawals</span>
                                    <span class="info-box-number">${{ $withdrawals }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ route('admin.users') }}">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Members</span>
                                    <span class="info-box-number">{{ $users }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                    </div>
                    <!-- /.col -->
                </div>
            </div>

            {{-- History --}}
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-12">
                        <div class="card-body p-0">

                           <div style="height:500px;overflow-y:scroll">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Activity</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($activities as $data)
                                            <tr>
                                                <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>
                                                <td>{{ $data->content }}</td>

                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                           </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/. container-fluid -->
        </section>

        <!-- /.content -->
    </div>
@endsection
