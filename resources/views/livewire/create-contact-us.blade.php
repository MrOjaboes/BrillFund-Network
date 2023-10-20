<div class="contact-main">
    <div class="block-text center">
        <h3 class="heading">Leave a message for us</h3>
        <p class="desc fs-20">Get in touch with Dexearn</p>
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

    <form>
        <div class="form-group">
            <label>Your name</label>
            <input type="text" class="form-control" wire:model="name" placeholder="Enter your name" />
            @error('name')
                <span style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email </label>
            <input type="email" class="form-control" wire:model="email" placeholder="Enter mail" />
            @error('email')
                <span style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Phone </label>
            <input type="text" class="form-control" maxlength="11" wire:model="phone" placeholder="Enter mail" />
            @error('phone')
                <span style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label>Subject </label>
            <select class="form-control" wire:model="subject" id="exampleFormControlSelect1">
                <option>--- Subject ---</option>
                <option>NFT Items</option>
                <option>NFT Items 1</option>
                <option>NFT Items 1</option>
            </select>
            @error('subject')
                <span style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Message </label>
            <textarea cols="30" rows="10" wire:model="content" class="form-control" placeholder="Enter your message"></textarea>
            @error('content')
                <span style="color:red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <a type="button" wire:click.prevent="store()" class="btn-action">Send message</a>
            </div>
            <div class="col-md-6">
                <a href="https://wa.me/message/ZHWYRHREPFTFG1" class="btn-action" title="Contact me via Whatsapp"
                    target="_blank">via Telegram </a>

            </div>
        </div>
    </form>
</div>
