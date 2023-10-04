@extends('layouts.admin')
@section('content')
    @include('layouts.Partials.navbar')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">Dashboard / Vendors</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- Main row -->
                <div class="row pt-3">
                    <!-- Left col -->
                    <div class="col-md-12">
                        <!-- MAP & BOX PANE -->
                        <!-- TABLE: LATEST ORDERS -->
                       <livewire:admin.vendor-page/>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->


                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
