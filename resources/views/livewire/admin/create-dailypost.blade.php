<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#churchModal">
    <i class="fas fa-plus"></i> New Post
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="churchModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="location_id">
                        <label for=" "> Title</label>
                        <input type="text" class="form-control" wire:model="title" id=" " >
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>


                    <div class="form-group">
                          <label for=""> Link</label>
                        <input type="url" placeholder="Link or URL" class="form-control" wire:model="link" id=" " >
                        @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                          <label for=" "> Caption</label>
                        <input type="file" placeholder="Link or URL" class="form-control" wire:model="photo" id=" " >
                        @error('photo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for=""> Note</label>
                      <textarea  placeholder="Content" class="form-control" wire:model="content"></textarea>
                      @error('content') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-success close-modal">Add Post</button>
            </div>
        </div>
    </div>
</div>
