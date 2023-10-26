@extends('layouts.affiliate')

@section('content')
    @include('layouts.Partials.bottombar')
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
                        <h1>Brill Market Place / {{ $crpto->name }}</h1>
                        <div class="text-justify">
                            <h3>Exchange Rate</h3>
                            <p>{{ '1'.$crpto->name .'=' }} {{'N'.$crpto->naira_amount}}</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                    </div>

                </div>
{{-- Message Notification --}}
                <div style="margin-bottom: 3%"></div>
                <div class="row">
                    @if (session()->has('message'))
                        <div class="col-md-6 mt-3 position-relative">
                            <div style="background:#18d26b;color:white;" class="alert">
                                <a href="#" class="close text-white" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="col-md-6 mt-3 position-relative">
                            <div style="background:#d21818;color:white;" class="alert">
                                <a href="#" class="close text-white" data-dismiss="alert"
                                    aria-label="close">&times;</a>
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif
                </div>
                {{-- Message Notification --}}
                <div style="margin-bottom: 1%"></div>
               <form action="{{ route('home.Crpto.store') }}" method="POST">
                @csrf
                   {{-- Conversion Section --}}
                <div class="row">
                    <div class="col-md-6">
                       <div class="form-horizontal form-element col-12">
                       <div class="form-group row">
                         <div class="col-sm-6">
                           <input
                             type="number"
                             size="3"
                             class="form-control"
                             id="first"
                             value=""
                             placeholder="Amount"
                           />
                           <input
                             type="hidden"
                             class="form-control"
                             id="naira"
                             value="{{ $crpto->naira_amount }}"
                           />
                         </div>
                         <div class="col-sm-6">
                           <input
                             type="number"
                             class="form-control"
                             id="total"
                             name="crpto_total"
                            readonly
                           />
                         </div>
                       </div>



                     </div>
                    </div>
               </div>
                  {{-- Details Section --}}
               <div class="row pt-5">
                    <div class="col-md-6">
                       <div class="form-horizontal form-element col-12">
                       <div class="form-group row">
                         <div class="col-sm-6">
                           <label for="">Wallet Address</label>
                           <input
                             type="text"
                             class="form-control"
                             value="{{ $crpto->address }}"
                             readonly
                           />

                         </div>
                         <div class="col-sm-6">
                           <label for="">Network</label>
                           <input
                             type="text"
                             class="form-control"
                             value="{{ $crpto->network }}"
                            readonly
                           />
                         </div>
                       </div>

                    </div>
               </div>
                  {{-- Submit Section --}}
               <div class="row pt-5">
                    <div class="col-md-6">

                       <div class="form-group row">
                         <div class="col-sm-6">
                           <button class="btn-custom w-p100" type="submit" style="background-color:#FE740E;color:white;">Let's Move</button>
                    </div>
               </div>
               </form>
                <div style="margin-bottom: 3%"></div>

            </div>
        </div>


    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $("#first").keyup(function () {
      var princAmt = $("#first").val();
      var taxAmt = $("#naira").val();
      var percentage = princAmt * taxAmt;
      $("#total").val(percentage);
    });
  </script>
@endsection
