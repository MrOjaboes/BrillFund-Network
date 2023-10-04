

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
    <link rel="stylesheet" href="/FrontEnd/AuthUi/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="/FrontEnd/AuthUi/css/custom.css">
    <link rel="stylesheet" href="/FrontEnd/AuthUi/css/style.css">
</head>

<body class="hold-transition theme-primary">

    @yield('content')
    <script src="/FrontEnd/AuthUi/js/vendors.min.js"></script>
    <script src="/FrontEnd/AuthUi/js/pages/chat-popup.js"></script>
    <script src="/FrontEnd/AuthUi/assets/icons/feather-icons/feather.min.js"></script>
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

    <link rel="stylesheet" href="/FrontEnd/AuthUi/vendor/iziToast/iziToast.min.css">
<script src="/FrontEnd/AuthUi/vendor/iziToast/iziToast.min.js"></script>


<script>
    'use strict';
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "bottomRight"
        });
    }
</script>
