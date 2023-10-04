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
</head>

<body>

    <div class="wrapper">
        <div class="image-holder">
            <img src="/FrontEnd/rockie/images/logo.svg" width="200" alt="">
        </div>
        <div class="form-inner">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-header">
                    <h3>Sign up</h3>
                    <img src="/FrontEnd/rockie/images/logo.svg" alt="" class="sign-up-icon">
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
                    <input type="text" name="last_name" class="form-control" data-validation="length alphanumeric"
                        data-validation-length="3-12">
                        @error('last_name')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">User Name:</label>
                    <input type="text" name="username" class="form-control" data-validation="length alphanumeric"
                        data-validation-length="3-12">
                        @error('username')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">E-mail Address:</label>
                    <input type="email" name="email" class="form-control" data-validation="email">
                    @error('email')
                    <span style="color:red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Coupon Code:</label>
                    <input type="text" name="coupon_code" class="form-control" data-validation="email">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" class="form-control" data-validation="length" data-validation-length="min8">
                    @error('password')
                    <span style="color:red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Re-enter Password:</label>
                    <input type="password" name="password_confirmation" class="form-control"name="" data-validation="length" data-validation-length="min8">
                </div>
                <div class="row" style="display: flex;flex-direction:row;justify-content:space-evenly;padding-top:20px;">
                    <div class="col-md-6" style="color: #FE740E">
                        Already Have an account? <a href="{{ route('login') }}">Login</a>
                    </div>
                    <div class="col-md-6">
<a href="{{ route('activation.code') }}" style="color: #FE740E">Get Coupon Code</a>
                    </div>
 </div>
                <button>Sign Up</button>

            </form>

        </div>

    </div>

    </div>

    <script src="//FrontEnd/AuthUi/js/jquery-3.3.1.min.js"></script>
    <script src="//FrontEnd/AuthUi/js/jquery.form-validator.min.js"></script>
    <script src="//FrontEnd/AuthUi/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
 