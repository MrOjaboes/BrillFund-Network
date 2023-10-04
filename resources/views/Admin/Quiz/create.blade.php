@extends('layouts.admin')
@section('content')
    @include('layouts.Partials.navbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Quiz</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span style="color:white;" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span style="color:white;" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-md-11">
                        <form action="{{ route('admin.quiz.add') }}" method="POST">
                            @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="login">
                                             <div class="form-group row">
                                                   <div class="col-sm-12">
                                                   <textarea name="question" required placeholder="{{ Auth::user()->name }}, What's on your mind?" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>


                                    </div>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="login">
                                             <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">A</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required name="option_1" class="form-control" id=""
                                                        placeholder="Option 1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">B</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required name="option_2" class="form-control" id=""
                                                        placeholder="Option 2">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">C</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required name="option_3" class="form-control" id=""
                                                        placeholder="Option 3">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">D</label>
                                                <div class="col-sm-10">
                                                    <input type="text" required name="option_4" class="form-control" id=""
                                                        placeholder="Option 4">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Correct Answer</label>
                                                <div class="col-sm-10">
                                                   <select name="correct" required class="form-control" id="">
                                                    <option value="option_1">A</option>
                                                    <option value="option_2">B</option>
                                                    <option value="option_3">C</option>
                                                    <option value="option_4">D</option>
                                                   </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit Question</button>
                                                </div>
                                            </div>
                                    </div>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>

                    </form>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-1"></div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
