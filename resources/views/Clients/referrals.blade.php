@extends('layouts.affiliate')
@section('content')
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.Partials.headerlogo')
            <!-- Header Navbar -->
        </header>
        @include('layouts.Partials.sidebar')
        <div class="content-wrapper">
            <div class="container">
                <!-- Main content -->
                <div class="row">
                    <div class="col-md-1"> </div>
                    <div class="col-md-6">
                        <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-justify">Referrals <b style="color:#FE740E">List </b></h2>
                    </div>
                </div>

                <div style="margin-bottom: 3%"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Total Earnings</th>
                                            <th>Cashout(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($refferals as $data)
                                        <tr>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ $data->user->email }}</td>
                                            <td>{{ $data->user->affiliateBalance->total }}</td>
                                            <td>{{ $data->user->withdrawal()->where('status',1)->sum('amount') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 3%"></div>
            </div>
        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
