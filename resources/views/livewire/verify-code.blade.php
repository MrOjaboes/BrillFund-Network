<div class="col-xl-6 col-md-12 mx-auto">
    <div class="contact-main">
        <div class="block-text center">
            <h3 class="heading">Check Your Code</h3>
            <p class="desc fs-20">Paste In Your Code to Confirm Your Code Status</p>
        </div>

        <form id="contact-form">
            <div class="form-group">
                <input class="form-control" type="text" id="name" wire:model="code"
                    placeholder="Paste code here..." required="true" />
                @error('code')
                    <span style="color:red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <button wire:click.prevent="checkCode()" class="btn-action">Check Now</button>

            </div>
        </form>




    </div>
</div>
