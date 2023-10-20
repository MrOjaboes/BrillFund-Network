<div>

<div>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form class="form-inline" wire:submit.prevent="generateCode()">
                        <button type="submit" class="btn btn-success mb-2">Generate Code</button>
                        <div class="form-group mx-sm-3 mb-2">
                          <label for="inputPassword2" class="sr-only">Amount</label>
                          <input type="number" wire:model="amount" class="form-control"  placeholder="Amount">
                          @error('amount') <span class="text-danger">{{ $message }}</span>@enderror

                        </div>

                      </form>
                </div>
            </div>
        </div>
    </div>
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

                            {{-- <th>S/N</th> --}}
                            <th>Code</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Generated By</th>
                            <th></th>
                            <th>Date</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                       {{-- @php
                       $i = 1;
                   @endphp --}}
                        @foreach ($coupons as $data)
                            <tr>
                                {{-- <td>{{ $i }}</td> --}}
                                <td>{{ $data->code }}</td>
                                <td> &#8358; {{ $data->amount }}</td>
                                <td class="">
                                    @if ($data->status == 0)
                                    <button class="btn btn-danger text-white">In-Active</button>
                                    @else
                                    <button class="btn btn-success text-white">Active</button>
                                    @endif
                                </td>
                                <td>{{ $data->user_name }}</td>
                                <td class="">
                                    <button wire:click.prevent="activateCoupon({{ $data->id }})" class="btn btn-success text-white">Activate</button>

                                    <a href="{{route('admin.coupon-details', $data->id )}}" class="btn btn-outline-secondary">Details</a>

                                </td>

                                <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>

                            </tr>
                            {{-- @php
                            $i++;
                        @endphp --}}
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </div>
    <span style="float: right">{{ $coupons->links() }}</span>
</div>
