<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        {{-- <div style="width:60px;height:60px;">
                            <img src="{{ asset('storage/Posts/'.$photo) }}" class="w-75 h-75 img-responsive" width="100%" alt="">
                        </div> --}}

                    </div>
                    <div class="form-group">
                        <input type="hidden" wire:model="location_id">
                        <label for=" "> Title</label>
                        <input type="text" class="form-control" wire:model="title" id=" " >
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                          <label for=" "> Link</label>
                        <input type="text" class="form-control" wire:model="link" id=" " >
                        @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                          <label for=" "> Content</label>
                        <input type="text" class="form-control" wire:model="content" id=" " >
                        @error('content') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                          <label for=" "> New Caption</label>
                        <input type="file" class="form-control" wire:model="photo" id=" " >
                        @error('photo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-success" data-dismiss="modal">Save changes</button>
            </div>
       </div>
    </div>
</div>
