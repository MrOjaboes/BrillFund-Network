<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Coin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-group">
                        <input type="hidden" wire:model="location_id">
                        <label for=" "> Title</label>
                        <input type="text" class="form-control" wire:model="name" id=" " >
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                          <label for=" "> Naira Equivalent</label>
                        <input type="text" class="form-control" wire:model="amount" id=" " >
                        @error('amount') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                          <label for=" ">Wallet Address</label>
                        <input type="text" class="form-control" wire:model="address" id=" " >
                        @error('address') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                          <label for=" "> Network</label>
                        <input type="text" class="form-control" wire:model="network" id=" " >
                        @error('network') <span class="text-danger">{{ $message }}</span>@enderror
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
