

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.learnify.ng/signin by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 05:39:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Brillfund Network</title>
    <meta name="keywords" content="peer-to-peer, make money online, money, online website, make money online website, marketting, affiliate marketting" />
    <meta name="description" content="Learnify">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="FrontEnd/rockie/images/general/e6c7bd70c31050b5fa0ca03ee160388bf0de2427-7iuBe.png">

    <!-- Vendors Style-->
    <link rel="stylesheet" href="/FrontEnd/AuthUi/Login/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="/FrontEnd/AuthUi/Login/css/custom.css">
    <link rel="stylesheet" href="/FrontEnd/AuthUi/Login/css/style.css">
    <style>
     .form-control {
            border-bottom: 1px solid #000000;
            border-top: none;
            border-left: none;
            border-right: none;
            border-radius: 0px;
            display: block;
            width: 100%;
            height: 45px;
            background: none;
            padding: 0 19px;
            color: #000;
            font-size: 17px;
    }
    button {
  border: none;
  width: 100%;
  height: 46px;
  border-radius: 22.5px;
  margin: auto;
  margin-top: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #FE740E;
  color: #fff;
  text-transform: uppercase;
  font-size: 17px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  button:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #FE740E;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:hover {
    color: white; }
    </style>
</head>

<body class="hold-transition theme-primary">
<div class="row mt-5 align-items-center justify-content-md-center" style="padding-top: 5%">
    <div class="col-5">
        <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">

    </div>
</div>
<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center">
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    @if (session()->has('error'))
                    <div class="col-md-6 mt-3 position-relative">
                        <div style="background:#d21818;color:white;" class="alert">
                            <a href="#" class="close text-white" data-dismiss="alert"
                                aria-label="close">&times;</a>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
                    <div class="edit-form">

                        <form class="form-horizontal form-element col-12" action="{{ route('login') }}" method="post">
                           @csrf
                               <div class="form-group row">
                                <div class="col-sm-12">
                                  <label for="id" class="col-sm-2 form-label">Login ID</label>
                                  <input type="text" class="form-control rounded-3" id="id" required placeholder="Email" name="email" autocomplete="off" autocorrect="off">
                                </div>
                                @error('email')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                  <label for="password" class="col-sm-2 form-label">Password</label>
                                  <input type="password" class="form-control rounded-3" id="password" required placeholder="Your Password" name="password" autocomplete="off" autocorrect="off">
                                </div>
                                @error('password')
                                <span style="color:red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="fog-pwd text-end">
                                    <a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> Forgot password?</a><br>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">LOG IN</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-warning ms-5">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
</div> --}}

<script src="/FrontEnd/AuthUi/Login/js/vendors.min.js"></script>
<script src="/FrontEnd/AuthUi/Login/js/pages/chat-popup.js"></script>
<script src="/FrontEnd/AuthUi/Login/assets/icons/feather-icons/feather.min.js"></script>
<script>
    $("#toggle-password").click(function(e) {
        e.preventDefault();
        let inp = $('#change-type').attr('type');
        if (inp == "password") {
            $('#change-type').attr('type', 'text');
            $('.fa-eye-slash').toggleClass('fa-eye-slash fa-eye');
        } else if (inp == "text") {
            $('#change-type').attr('type', 'password');
            $('.fa-eye').toggleClass('fa-eye fa-eye-slash');
        }
    });
</script>

<link rel="stylesheet" href="/FrontEnd/AuthUi/Login/vendor/iziToast/iziToast.min.css">
<script src="/FrontEnd/AuthUi/Login/vendor/iziToast/iziToast.min.js"></script>


<script>
'use strict';
function notify(status,message) {
    iziToast[status]({
        message: message,
        position: "bottomRight"
    });
}
</script>








