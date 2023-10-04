@extends('layouts.auth')

@section('content')

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="content-top-agile p-20 pb-0">
                        <img src="/FrontEnd/rockie/images/general/logo_3.png" width="" height="" alt="logo">
                        <h3>Input Email to reset your <strong>Dexearn</strong> account</h3>
                        @if (session()->has('message'))
                                        <div style="background:#18d26b;color:white;" class="alert">
                                            <a href="#" class="close text-white" data-dismiss="alert"
                                                aria-label="close">&times;</a>
                                            {{ session('message') }}
                                        </div>
                                    @endif
                    </div>

                    <div class="p-40 edit-form">
                        <form class="form-horizontal form-element col-12" action="{{ route('password.email') }}" method="post">
                           @csrf
                               <div class="form-group row">
                                <div class="col-sm-12">
                                  <label for="id" class="col-sm-2 form-label">Email</label>
                                  <input type="email" class="form-control rounded-3" id="id" required placeholder="Email" name="email" autocomplete="off" autocorrect="off">
                                </div>
                                @error('email')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>



                            <div class="row g-4">

                                <div class="col-12">
                                    <button type="submit" class="btn-custom w-p100">Send Password Reset Link</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
