

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brillfund Network</title>
    <meta name="csrf-token" content="OgJXQEDkFIkXIEMj6YpE1gwrTP9VKEmEfgjxbSuo">
    <meta name="keywords" content="peer-to-peer, make money online, money, online website, make money online website, marketting,affiliate marketting" />
    <meta name="description" content="Brillfund">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="/FrontEnd/rockie/images/logo.svg">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="/FrontEnd/Affiliate/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="/FrontEnd/Affiliate/css/style.css">
    <link rel="stylesheet" href="/FrontEnd/Affiliate/css/custom.css">
    <link rel="stylesheet" href="/FrontEnd/Affiliate/css/skin_color.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import  url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');
    @import  url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;0,900;1,500&display=swap');

    body {
        margin: 0;
    }

    .adds {
        position: relative;
        font-family: 'Montserrat', sans-serif;
        background: url(https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c3BsYXNoJTIwc2NyZWVuJTIwd2hpdGUlMjBiZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 100vh;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        overflow: hidden;
    }
    .cl{
        position: relative;
        padding:0;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 1;
    }
    .cl .logo{
        font-weight: 700;
        font-size: 28px;
        background-color: #153048;
        width: 100%;
        padding: 20px 0;
        color: #22c87b;
    }
    .cl h1{
        padding: 10px 0 0 0;
    }
    .cl .blobb{
        width: 100%;
        position: absolute;
        z-index: -1;
        left: 131px;
        top: 355px;
    }
    ._text-box{
        padding: 15px;
        color: #001000;
        width: 100%;
    }
    ._text-box p {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
        text-align: start;
    }
    .cr{
        background-image: url(https://i.ibb.co/dMWvxFG/bestbet.png);
        height: 400px;
        background-size: contain;
        background-repeat: no-repeat;
        z-index: 2;

    }
    .d-link{
        text-decoration: none;
        color: #22c87b;
        background-color: #153048;
        border-radius: 50px;
        padding: 20px 10px;
        font-weight: 600;
        margin: 20px 0;
        display: block;
        text-align: center;
        box-shadow: 5px 14px 50px -4px #313c2e;
    }

    ._text {
        line-height: 35px;
        font-size: 18px;
        padding: 10px;
    }

</style>
@livewireStyles

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

    <main id="main" class="">
        @yield('content')

    </main><!-- End #main -->

    @livewireScripts
    <script src="/FrontEnd/Affiliate/js/vendors.min.js"></script>
    <script src="/FrontEnd/Affiliate/js/pages/chat-popup.js"></script>
    <script src="/FrontEnd/Affiliate/assets/icons/feather-icons/feather.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/select2/dist/js/select2.full.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/moment/min/moment.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/FrontEnd/Affiliate/assets/vendor_plugins/iCheck/icheck.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- WebkitX Admin App -->
    <script src="/FrontEnd/Affiliate/js/template.js"></script>
    <script src="/FrontEnd/Affiliate/js/pages/dashboard.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            $('#copy').click(function() {
                var input = $('#myRef');
                input.prop('disabled', false);
                input.select();
                document.execCommand('copy');
                input.prop('disabled', true);

                $('.copy-feedback').removeClass('d-none').delay(5000).queue(function() {
                    $(this).addClass('d-none').dequeue();
                });
            });
        });

        // select the greeting element
        const greetingElem = document.querySelector('#greeting');

        // determine the time of day
        const now = new Date();
        const hours = now.getHours();

        // set the greeting based on the time of day
        if (hours < 12) {
            greetingElem.textContent = 'Good Morning';
        } else if (hours < 18) {
            greetingElem.textContent = 'Good Afternoon';
        } else {
            greetingElem.textContent = 'Good Evening';
        }

            </script>
    <link rel="stylesheet" href="https://www.learnify.ng/vendor/iziToast/iziToast.min.css">
<script src="https://www.learnify.ng/vendor/iziToast/iziToast.min.js"></script>


<script>
    'use strict';
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "bottomRight"
        });
    }
</script>
</body>

</html>
