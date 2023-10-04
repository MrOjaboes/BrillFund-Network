@extends('layouts.affiliate')
@section('content')
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.Partials.headerlogo')

            <!-- Header Navbar -->
            <nav id="changeNavbarColor" class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" role="button" id="backButton"
                                class="waves-effect waves-light text-white" title="left">
                                <i data-feather="chevron-left"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-white fs-16 text-capitalize">Quiz</div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="https://www.learnify.ng/account/notifications"
                                class="waves-effect waves-light text-white" title="Notification">
                                <i data-feather="bell"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        @include('layouts.Partials.sidebar')

        <div class="content-wrapper">
            <div class="container-full">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="height-auto h-75">
                                <img src="/FrontEnd/Affiliate/images/image_6.jpeg" alt="quiz">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card-body">

                                @if ($quiz)
                                    <p><strong>Instruction:</strong> Pick one</p>
                                @endif
                                @if (session()->has('message'))
                                    <div style="background:#18d26b;color:white;" class="alert">
                                        <a href="#" class="close text-white" data-dismiss="alert"
                                            aria-label="close">&times;</a>
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div style="background:#d21818;color:white;" class="alert">
                                        <a href="#" class="close text-white" data-dismiss="alert"
                                            aria-label="close">&times;</a>
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>

                            @if ($quiz)
                                @foreach ($quiz as $item)
                                    <div class="card shadow-lg">
                                        <div class="card-header">
                                            <h4><strong>Title:</strong> {{ $item->question }}</h4>
                                        </div>

                                    </div>

                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <form method="post" action="{{ route('home.quiz.post') }}">
                                                @csrf

                                                <input name="question_id" value="{{ $item->id }}" type="hidden">
                                                <div class="form-group">
                                                    <label for="predict"> Your Prediction</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option0" value="A">
                                                        <label class="form-check-label" for="option0">
                                                            A: {{ $item->option_1 }}
                                                        </label><br />
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option1" value="B">
                                                        <label class="form-check-label" for="option1">
                                                            B: {{ $item->option_2 }}
                                                        </label><br />
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option2" value="C">
                                                        <label class="form-check-label" for="option2">
                                                            C: {{ $item->option_3 }}
                                                        </label><br />
                                                        <input class="form-check-input" type="radio" name="answer"
                                                            id="option3" value="D">
                                                        <label class="form-check-label" for="option3">
                                                            D: {{ $item->option_4 }}
                                                        </label><br />
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                <input name="title" value="WHEN WAS LEARNIFY LAUNCHED" type="hidden">
                                                <input name="cost" value="0" type="hidden">
                                                <input name="id" value="20" type="hidden">
                                            </div> --}}

                                                <button type="button" data-bs-toggle="modal" data-bs-target="#info"
                                                    class="btn-custom hidden"> Submit </button>

                                                <div class="modal fade dialogbox" id="info" data-bs-backdrop="static"
                                                    tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Quiz Instruction</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="font-20">This Prediction Cost
                                                                    <strong>$0.01</strong>
                                                                    activity point whether you win or you lose.
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-custom text-white">Proceed</button>
                                                                <button type="button" class="btn btn-danger text-white"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">No Quiz is Available for you Currently!</div>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Prediction History</h4>
                                </div>
                                <div class="card-body">
                                    @if ($userquiz)
                                        <table id="example" class="table table-lg invoice-archive">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Your Answer</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($userquiz as $item)
                                                    <tr>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d D, M Y') }}
                                                            -
                                                            {{ \Carbon\Carbon::parse($item->created_at)->format('H:i:A') }}
                                                        </td>
                                                        <td>{{ $item->answer }}</td>
                                                        <td>
                                                            @if ($item->is_correct == 1)
                                                                <span class="text-success">Correct</span>
                                                            @else
                                                                <span class="text-danger">Wrong</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    @else
                                        <div class="card bg-primary text-center text-white p-5">
                                            <h4>No History Found</h4>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.Partials.bottombar')

    </div>

@endsection
