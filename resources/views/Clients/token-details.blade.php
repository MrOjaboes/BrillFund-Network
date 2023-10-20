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
                <form class="form-horizontal form-element" action="{{ route('ticket-reply',$ticket->id) }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="">Token Type</label>
                           <input type="text" class="form-control" readonly value="{{ $ticket->reason }}" id="">
                        </div>
                    </div>
                    <div style="overflow-y: scroll;overflow-x: hidden;height:300px">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                @foreach ($messages as $item)
                                <textarea name="message" readonly class="form-control" value="{{ $item->message }}">{{ $item->messages }}</textarea>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <textarea name="message2" class="form-control" placeholder="Reply Message" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="col-6">
                        <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Reply Message
                        </button>
                    </div>
                </form>
                <div style="margin-bottom: 8%"></div>

            </div>

        </div>




        @include('layouts.Partials.bottombar')

    </div>
@endsection
