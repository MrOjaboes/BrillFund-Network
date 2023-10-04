<!-- Modal -->
<div>
    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" wire:model="location_id">
                            <label for=" "> Name</label>
                            <input type="text" class="form-control" readonly wire:model="name" id=" ">
                        </div>
                        <div class="form-group">
                            <label for=" "> Contact</label>
                            <input type="text" class="form-control" readonly wire:model="phone" id=" ">
                        </div>

                        <div class="form-group">
                            <label for=" "> Email</label>
                            <input type="text" class="form-control" readonly wire:model="email" id=" ">
                        </div>
                        <div class="form-group">
                            <label for=" "> Subject</label>
                            <input type="text" class="form-control" readonly wire:model="subject" id=" ">
                        </div>
                        <div class="form-group">
                            <label for=" "> Message</label>
                            <textarea wire:model="content" class="form-control" readonly id="" cols="30" rows="10"></textarea>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
