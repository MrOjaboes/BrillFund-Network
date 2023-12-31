<div>
    @include('livewire.admin.create-market')
    @include('livewire.admin.edit-market') <br><br>

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

                                <th>S/N</th>
                                <th>Coin</th>
                                <th>Address</th>
                                <th>Network</th>
                                <th>Amount(N)</th>
                                <th>Date</th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                           @php
                           $i = 1;
                       @endphp
                            @foreach ($markets as $data)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->network }}</td>
                                    <td>&#8358;{{ $data->naira_amount }}</td>
                                    <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>
                                    <td>
                                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $data->id }})" class="btn btn-outline-success btn-sm">Edit</button>
                                        <button wire:click="delete({{ $data->id }})" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                @php
                                $i++;
                            @endphp
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->
        </div>
        <span style="float: right">{{ $markets->links() }}</span>
    </div>
