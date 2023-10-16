
<aside class="main-sidebar">
    @if(auth()->user()->status == 0)
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="/FrontEnd/rockie/images/home.svg" class=""alt="">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.generate-code') }}">
                            <i data-feather="monitor"></i>
                            <span>Generate Code</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.p2p') }}">
                            <img src="/FrontEnd/rockie/images/p2p.svg" class=""alt="">
                            <span>P2P Registeration</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.codes') }}">
                            <i data-feather="monitor"></i>
                            <span>All Codes</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.refferals') }}">
                            <img src="/FrontEnd/rockie/images/profile.svg" class=""alt="">
                            <span>Referrals</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.codes') }}">
                            <img src="/FrontEnd/rockie/images/casino_icon.svg" class=""alt=""></i>
                            <span>Casino/Game</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.vtu') }}">
                            <img src="/FrontEnd/rockie/images/vtu.svg" class=""alt="">
                            <span>Brill VTU</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.codes') }}">
                            <img src="/FrontEnd/rockie/images/store.svg" class=""alt="">
                            <span>Brill Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.codes') }}">
                            <img src="/FrontEnd/rockie/images/crypto_market.svg" class=""alt=""></i>
                            <span>Crypto Marketplace</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.payout')}}">
                            <img src="/FrontEnd/rockie/images/crypto_market.svg" class=""alt=""></i>
                            <span>Payment</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.freelancing') }}">
                            <img src="/FrontEnd/rockie/images/freelancing.svg" class=""alt="">
                            <span>Brill Freelancing</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.token') }}">
                            <img src="/FrontEnd/rockie/images/brill_token.svg" class=""alt=""></i>
                            <span>Buy Brill Token</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.codes') }}">
                            <img src="/FrontEnd/rockie/images/digital_course.svg" class=""alt="">
                            <span>Brill Digital Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home.profile') }}">
                            <img src="/FrontEnd/rockie/images/profile.svg" class=""alt="">
                            <span>User Profile</span>
                        </a>
                    </li>


                </ul>

                {{-- <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            @if (Auth::user()->profile_photo == null)
                            <img src="/FrontEnd/rockie/images/logo.svg" class="p-25" width="200" alt="">
                            @else
                            <img src="{{ asset('/storage/Profiles/'.Auth::user()->profile_photo)}}" class="p-25" width="200" alt="">
                            @endif

                        </div>
                    </div>
                    <div class="copyright text-center m-25">
                        <p>© 2023 All Rights Reserved </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    @endif
</aside>

<style>
    .sidebar-menu li>a>span {
    color:  #898989;
    }
    .sidebar-menu>li>a>img {
    width: 18px;
    color:#FE740E;
    }
    .sidebar-menu>li>a>svg {
    color:#FE740E;
    }
    @media (min-width: 768px){
        .fixed .multinav {
            height: calc(100% - 250px);
            overflow-y: scroll;
        }
    }
</style>


