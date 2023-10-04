<div>

    <div class="card">
        <div class="card-header border-transparent">
               <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="row py-1">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close text-white" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-md-1"></div>
            </div>
          </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>



                            <th>Name</th>
                            <th>Amount</th>
                            <th>Remark(s)</th>
                            <th>Date</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($deposits as $data)
                            <tr>

                                 
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->balance }}</td>
                                <td>{{ $data->description }}</td>
                                <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>

                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </div>
    <span style="float: right">{{ $deposits->links() }}</span>
</div>
