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
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
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
