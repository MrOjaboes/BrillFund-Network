@extends('layouts.app')
<style>
    .trading__image #bagImg {
        width: 500px;
        height: 400px;
    }
</style>
@section('content')
    <!-- Banner Top -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h3 class="heading">FINANCIALLY FREE WITH <span style="color:#FE740E">BRILLFUND</span></h3>
                    <p class="fs-20 desc">
                        The NO1 Innovation platform that rewards
                        users for their active participation
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="banner__image">
                        <img src="/FrontEnd/rockie/images/figures.png" width="500" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Top -->

    <section class="services-2 bg">
        <div class="container">
            <div class="row pt-3">
                <div class="col-xl-1"></div>
                <div class="col-xl-5 col-md-12">
                    <h3 class="heading">
                        How BRILLFUND <br>
                        <span style="color:#FE740E">WORKS</span>
                    </h3>

                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="services__content" data-aos="fade-up" data-aos-duration="1000">

                        <ul class="list">
                            <li class="active">
                                <div class="icon bg-blue">
                                    <img src="/FrontEnd/rockie/images/hsh.svg" class="w-75" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">EARN WITH WELCOME BONUS</h6>
                                    <p>
                                        Immediately after registration each user get N3000
                                        welcome bonus cash-back on his/her dashboard
                                        instantly.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon green">
                                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6667 3.66699V9.16699" stroke="#58BD7D" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M29.3333 3.66699V9.16699" stroke="#58BD7D" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.41675 16.665H37.5834" stroke="#58BD7D" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M40.3334 34.8333C40.3334 36.2083 39.9484 37.51 39.2701 38.61C38.0051 40.7367 35.6768 42.1667 33.0001 42.1667C31.1484 42.1667 29.4618 41.4883 28.1784 40.3333C27.6101 39.8567 27.1151 39.27 26.7301 38.61C26.0518 37.51 25.6667 36.2083 25.6667 34.8333C25.6667 30.7817 28.9484 27.5 33.0001 27.5C35.2001 27.5 37.1618 28.4716 38.5001 29.9933C39.6368 31.295 40.3334 32.9817 40.3334 34.8333Z"
                                            stroke="#58BD7D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M30.1401 34.8338L31.9551 36.6488L35.8601 33.0371" stroke="#58BD7D"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M38.5 15.5837V29.9936C37.1617 28.472 35.2 27.5003 33 27.5003C28.9483 27.5003 25.6667 30.782 25.6667 34.8337C25.6667 36.2087 26.0517 37.5103 26.73 38.6103C27.115 39.2703 27.61 39.857 28.1783 40.3337H14.6667C8.25 40.3337 5.5 36.667 5.5 31.167V15.5837C5.5 10.0837 8.25 6.41699 14.6667 6.41699H29.3333C35.75 6.41699 38.5 10.0837 38.5 15.5837Z"
                                            stroke="#58BD7D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21.9918 25.1169H22.0083" stroke="#58BD7D" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.2062 25.1169H15.2226" stroke="#58BD7D" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.2062 30.6169H15.2226" stroke="#58BD7D" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <h6 class="title">EARN WITHOUT REFERRALS</h6>
                                    <p>
                                        Through performing daily tasks , Users in the platform
                                        gets Money in his/her dashboard instantly. N100 -
                                        Daily Ad engagement bonus, N200 - Login Bonus,
                                        N300 - Brill post.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon blue">
                                    <img src="/FrontEnd/rockie/images/hsh3.svg" class="w-75" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">EARN WITH AFFILIATE</h6>
                                    <p>
                                        You get paid a whooping N3800 per friend you invite
                                        to Brillfund with your referral link after a successful
                                        registration, when your downline refers you earn
                                        N200 per person, when your downlines downline refer
                                        you earn N150 per person and also you earn N100
                                        when your downlines dowline dowline refers.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="trading" style="
                    background-image:url('/FrontEnd/rockie/images/hand-holding-money-finance-concept 1.svg');
                    background-position: right;
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-color: linear-gradient(#9198e5, #e66465);
                    background-size: 60%;">
        <div class="container">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-5 col-md-12">
                    <h3 class="heading">
                        Our <br>
                        <span style="color:#FE740E">Withdrawal</span><br>
                        Method
                    </h3>

                </div>
                <div class="col-xl-6 col-md-12"> </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="justify-content-center" style="background: #D9D9D966;border-radius:17px;padding:10px">
                        <p class="fs-20 desc mb-5">
                            Our Withdrawal Days and minimum are as follows
        Affiliate earners minimum withdrawal is N7600 and withdrawal portal opens on Tuesday and Friday every week by 4pm to 5pm, we pay you within 12-24 hours of payment request, Non Affiliate earners are paid every month (Withdrawal for non affiliate earners open 30th of every month ) minimum = N7000
                        </p>
                        <p class="text-center"><a href="" style="color:#FE740E;">Payment in Crypto is also available!</a></p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <section class="testimonials-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="background: #D9D9D966">
                            <img src="/FrontEnd/rockie/images/Mask group.svg" class="img-thumbnail" alt="">
                            <h6 class="heading">VTU PORTAL</h6>
                            <p class="fs-20 desc">Buy Airtime through our VTU platform with ease, and enjoy seamless and
                                timely transaction.</p>
                            <a href="" class="btn" style="background: #FE740E;color:white">Know more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="background: #D9D9D966">
                            <img src="/FrontEnd/rockie/images/Mask group.svg" class="img-thumbnail" alt="">
                            <h6 class="heading">VTU PORTAL</h6>
                            <p class="fs-20 desc">Buy Airtime through our VTU platform with ease, and enjoy seamless and
                                timely transaction.</p>
                            <a href="" class="btn" style="background: #FE740E;color:white">Know more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body" style="background: #D9D9D966">
                            <img src="/FrontEnd/rockie/images/Mask group.svg" class="img-thumbnail" alt="">
                            <h6 class="heading">VTU PORTAL</h6>
                            <p class="fs-20 desc">Buy Airtime through our VTU platform with ease, and enjoy seamless and
                                timely transaction.</p>
                            <a href="" class="btn" style="background: #FE740E;color:white">Know more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
