<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v8 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="/FrontEnd/AuthUi/css/style.css">
    <style>
        .form-control {
            height: 25px;
            width: 75%;
        }

        button {
            margin-top: 27px;
            margin-left: 24px;
            width: 62%;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="image-holder">
            <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
        </div>
        <div class="form-inner">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="referal_code2" class="form-control" readonly value="{{ $lent }}"
                    placeholder="Referal_code (Optional)">
                     <input type="hidden" name="referal_code"
                    class="form-control" readonly value="{{ url()->full() }}" placeholder="Referal_code (Optional)">

                <div class="form-header">
                    <h3>Sign up</h3>
                    <img src="/FrontEnd/rockie/images/logo.svg" alt="" width="150" class="sign-up-icon">
                    <h5 style="font-size:20px;color:black">Invited by
                        {{ $lent }}
                    </h5>
                    @if (session()->has('message'))
                         <p style="color:rgb(13, 252, 13);" class="alert">
                            <a href="#" class="close text-white" data-dismiss="alert"
                                aria-label="close">&times;</a>
                            {{ session('message') }}
                        </p>
                @endif
                @if (session()->has('error'))
                    <p style="color:red;" class="alert">
                        <a href="#" class="close text-white" data-dismiss="alert"
                            aria-label="close">&times;</a>
                        {{ session('error') }}
                    </p>

            @endif
                </div>
                <div class="form-group">
                    <label for="">First Name:</label>
                    <input type="text" name="first_name" class="form-control" data-validation="length alphanumeric"
                        data-validation-length="3-12">
                    @error('first_name')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Last Name:</label>
                    <input type="text" name="last_name" class="form-control">
                    @error('last_name')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">User Name:</label>
                    <input type="text" name="username" class="form-control">
                    @error('username')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">E-mail Address:</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Coupon Code:</label>
                    <input type="text" name="coupon_code" class="form-control">
                    @error('coupon_code') <span style="color:red" role="alert"> <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Re-enter Password:</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="row" style="padding-top:20px;">
                    <div class="col-md-6" style="color: #FE740E">
                        <p style="color: #FE740E">Already Have an account? <a style="margin-right: 20px;" href="{{ route('login') }}">Login</a>
                            <a href="{{ route('activation.code') }}" style="color: #FE740E">Get Coupon Code</a>
                        </p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
                <button type="submit">Sign Up</button>

            </form>

        </div>

    </div>

    </div>

    <script src="//FrontEnd/AuthUi/js/jquery-3.3.1.min.js"></script>
    <script src="//FrontEnd/AuthUi/js/jquery.form-validator.min.js"></script>
    <script src="//FrontEnd/AuthUi/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
