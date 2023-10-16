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
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($vendors as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->contact }}</td>
                                <td>
                                    @if ($data->status == 0)
                                        <button class="btn btn-success text-white">Active</button>
                                    @else
                                        <button class="btn btn-danger text-white">Banned</button>
                                    @endif

                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.usersDetails', $data->id) }}"
                                        class="btn btn-outline-secondary">Details</a>

                                </td>
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
    <span style="float: right">{{ $vendors->links() }}</span>
</div>
