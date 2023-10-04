@extends('layouts.auth')

@section('content')

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="content-top-agile p-20 pb-0">
                        <img src="/FrontEnd/rockie/images/general/logo_1.png" width="" height="200" alt="logo">
                        <h3>Input Email to reset your <strong>Dexearn</strong> account</h3>
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
























@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
