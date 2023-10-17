@extends('layouts.app')
@section('content')

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading">All Posts</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <p class="fs-18">/</p>
                        </li>
                        <li>
                            <p class="fs-18">All Posts</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-list">
        {{-- <div class="my-5" style="overflow: hidden">
            <script type="text/javascript">
                atOptions = {
                    'key': 'f3b567735b6f72b0708ecf8c10a833c9',
                    'format': 'iframe',
                    'height': 60,
                    'width': 468,
                    'params': {}
                };
                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') +
                    '://www.profitabledisplaynetwork.com/f3b567735b6f72b0708ecf8c10a833c9/invoke.js"></scr' + 'ipt>');
            </script>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="blog-main">
                        @foreach ($posts as $post)
                        <div class="blog-box">
                            <div class="box-image">
                                <img src="{{ asset('storage/Posts/' . $post->photo) }}" class="img-thumbnail img-responsive"
                                    alt="" />
                            </div>

                            <div class="box-content">
                                <div class="category btn-action">Today's Advert</div>
                                <a href="" class="title">{{ $post->title }}</a>

                                <div class="meta">
                                    <a href="#" class="name"><span></span>DexEarn</a>
                                    <a href="#" class="time">{{ \Carbon\Carbon::parse($post->created_at)->format('d D, M Y') }}
                                        - {{ \Carbon\Carbon::parse($post->created_at)->format('H:i A') }}</a>
                                </div>
                                <p class="text">
                                   {{$post->content}}
                                </p>
                                <a href="">Read More</a>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    {{-- <div class="sidebar">
                        <form class="form-search" action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search Post" />
                                <button type="submit" class="search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
