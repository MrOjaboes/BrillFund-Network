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
                        <h1>Message Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
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
                        <form action="{{ route('admin.message.reply',$ticket->id) }}" method="POST">
                            @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Token Type</label>
                                    <div class="col-sm-10">
                                         <input type="text" readonly class="form-control" value="{{ $ticket->reason }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">From</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" value="{{ $ticket->sender->name }}">
                                    </div>
                                </div>

                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="login">
                                        <div class="tab-content" style="overflow-y: scroll;overflow-x: hidden;height:300px">
                                            <div class="tab-pane active" id="login">
                                                     <div class="form-group row">
                                                           <div class="col-sm-12">
                                                           <textarea name="question" readonly value="{{ $ticket->message }}" class="form-control" id="" cols="30" rows="10">{{ $ticket->message }}</textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                            @foreach ($responses as $item)
                                            <div class="tab-pane active" id="login">
                                                <div class="form-group row">
                                                      <div class="col-sm-12">
                                                      <textarea name="question" readonly value="{{ $item->message }}" class="form-control" id="" cols="30" rows="10">{{ $item->message }}</textarea>
                                                   </div>
                                               </div>
                                           </div>
                                            @endforeach

                                            <!-- /.tab-pane -->
                                        </div><br>
                                            <div class="form-group row">
                                                  <div class="col-sm-10">
                                                      <textarea name="message2" placeholder="Reply to Message" class="form-control" cols="30" rows="10"></textarea>
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                  <div class="col-sm-6">
                                                      <button type="submit" class="btn btn-outline-success">Reply Message</button>
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
                <a href="{{ route('admin.messages') }}" class="btn btn-danger">Back</a>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
