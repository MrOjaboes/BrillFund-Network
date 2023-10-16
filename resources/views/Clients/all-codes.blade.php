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
                        <h1>All Codes</h1>
                    </div>
                    <div class="col-md-5">
                    </div>

                </div>

                <div style="margin-bottom: 3%"></div>
{{-- First Section --}}
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <span class="btn" style="background:#FE740E;color:white">Active Codes</span>
                    </div>
                    <div class="col-md-3">
                        <span class="btn" style="background:#CDCDCD;color:black">Used Codes</span>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div style="margin-bottom: 3%"></div>
                {{-- Second Section --}}
                <div class="row">

                    @foreach ($codes as $item)
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-code justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">{{ 'N'.$item->amount }}</h3>
                                </div>
                                <div class="d-flex justify-content-between w-p100">
                                    <p class="fw-bolder text-white" style="font-size:20px;margin-top:-20px">{{ $item->code }}</p>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="code form-control border-0"
                                                    value="{{ $item->code }}"  readonly>

                                                 <button  onclick="triggerExample()" class="btn mt-5" style="background:#ffffff;color:#FE740E">
                                                  Copy Code
                                                </button>
                                            </div>
                                        </form>
                                        <div class="copy-feedback d-none text-white">Code copied!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row" style="display: none">

                    @foreach ($codes as $item)
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <div class="ccard-code justify-content-center align-items-center">
                                <div class="d-flex justify-content-between w-p100">
                                    <h3 style="color:white;">{{ 'N'.$item->amount }}</h3>
                                </div>
                                <div class="d-flex justify-content-between w-p100">
                                    <p class="fw-bolder text-white" style="font-size:20px;margin-top:-20px">{{ $item->code }}</p>
                                </div>
                                <div class="justify-content-between w-p100">
                                    <p class="fw-bolder text-white" style="margin-top:-20px">Used By : {{ $item->used_by }}</p>
                                    <p class="fw-bolder text-white" style="margin-top:-20px">Referred By : {{ $item->reffered_by }}</p>
                                </div>
                                <div class="d-flex justify-content-center w-p100">
                                        <div class="form-group">
                                            <input id="myRef" type="text" class="form-control border-0"
                                                value="{{ $item->code }}" disabled>

                                             <button id="copy" class="btn mt-5" style="background:#ffffff;color:#FE740E">
                                              Copy Code
                                            </button>
                                        </div>
                                        <div class="copy-feedback d-none text-white">Code copied!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div style="margin-bottom: 3%"></div>

        </div>
    </div>




    @include('layouts.Partials.bottombar')

    </div>
@endsection

<script>
    function triggerExample() {
        const element = document.querySelector('.code');
        element.select();
        element.setSelectionRange(0, 99999);
        document.execCommand('copy');
    }
</script>
