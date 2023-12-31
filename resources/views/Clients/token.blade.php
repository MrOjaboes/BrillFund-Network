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
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6 col-12">
                        <h1 class="heading">Token <b style="color:#FE740E">Inquiry</b> </h1>

                    </div>
                    <div class="col-md-5">
                    </div>

                </div>
                <div class="row">
                    @if (session()->has('message'))
                    <div class="col-md-12 mt-3 position-relative">
                        <div class="box">
                            <div class="box-body">
                                <div style="background:#18d26b;color:white;" class="alert">
                                    <a href="#" class="close text-white" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('message') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                </div>
                {{-- First Section --}}

                <div style="margin-bottom: 5%"></div>
                <form class="form-horizontal form-element" action="{{ route('token.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <select class="form-control" name="reason" required id="">
                                <option value="">--- Select Token ---</option>
                                <option value="USDT">USDT</option>
                                <option value="BTC">BTC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <textarea name="message" required class="form-control" placeholder="Message" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Send
                            Message
                        </button>
                    </div>
                </form>
                <div style="margin-bottom: 3%"></div>
               <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <table class="table table-hovered">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Reason</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $item)
                                    <tr>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->reason }}</td>
                                        <td><a href="{{ route('ticket-details',$item->id) }}" class="btn btn-outline-secondary">Details</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               </div>
            </div>

        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
