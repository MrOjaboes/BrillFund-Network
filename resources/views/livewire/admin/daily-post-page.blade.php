<div>
    @include('livewire.admin.create-dailypost')
    @include('livewire.admin.edit-dailypost') <br><br>

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
                                <th>Title</th>
                                <th>Link</th>
                                <th>Content</th>
                                <th>Cpation</th>
                                <th>Date</th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                           @php
                           $i = 1;
                       @endphp
                            @foreach ($dailyPost as $data)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td> <a href="{{ $data->link }}" target="_blank">{{ $data->link }}</a></td>
                                    <td>{{ $data->content }}</td>
                                    <td>
                                        <div style="width:60px;height:60px;">
                                            <img src="{{ asset('storage/Posts/'.$data->photo) }}" class="w-75 h-75 img-responsive" width="100%" alt="">
                                            </div>
                                    </td>
                                    {{-- <td class="">
                                        @if ($data->status == 0)
                                        <button class="btn btn-success text-white">Active</button>
                                        @else
                                        <button class="btn btn-danger text-white">Cancelled Active</button>
                                        @endif
                                    </td> --}}

                                    <td>  {{ \Carbon\Carbon::parse($data->created_at)->format('d D, M Y') }} </td>
                                    <td>
                                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $data->id }})" class="btn btn-outline-success btn-sm">Edit</button>
                                       {{-- <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm">Delete</button> --}}

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
        <span style="float: right">{{ $dailyPost->links() }}</span>
    </div>
