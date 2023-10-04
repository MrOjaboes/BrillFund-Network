<div>
<div class="mb-3">
    <span>Affiliate Withdrawal Status ::
        @if ($withdrawal->status == 1)
        <button class="btn btn-success" wire:click.prevent="deactivate">Active</button>
        @else
        <button class="btn btn-danger" wire:click.prevent="activate">In-Active</button>
        @endif
    </span>
    <span>Task Withdrawal Status ::
        @if ($withdrawal->task_status == 1)
        <button class="btn btn-success" wire:click.prevent="taskDeactivate">Active</button>
        @else
        <button class="btn btn-danger" wire:click.prevent="taskActivate">In-Active</button>
        @endif
    </span>
</div>
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
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Remark(s)</th>
                            <th>Date</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                       @php
                       $i = 1;
                   @endphp
                        @foreach ($withdrawals as $data)
                            <tr>

                                <td>{{ $i }}</td>
                                <td>{{ $data->name }}</td>
                                <td>${{ $data->amount }}</td>
                                <td class="">
                                    @if ($data->status == 0)
                                    <button wire:click.prevent="changeStatus({{ $data->id }})" class="btn btn-warning text-white">Pending</button>
                                    @else
                                    <button class="btn btn-success text-white">Approved</button>
                                    @endif
                                </td>
                                <td>{{ $data->note }}</td>
                                <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>
                                <td><a href="{{ route('admin.withdrawalDetails',$data->id) }}" class="btn btn-outline-secondary">Details</a></td>

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
    <span style="float: right">{{ $withdrawals->links() }}</span>
</div>
