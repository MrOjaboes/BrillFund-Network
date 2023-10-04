<div class="col-xl-6 col-md-12 mx-auto">
    <div class="contact-main">
        <div class="block-text center">
            <h6 class="heading">Membership Form</h6>
            <p class="desc fs-20">Fill In the Form below to become a Vendor </p>
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-check-circle"></i></strong> {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            </div>

        <form id="contact-form">

            <div class="form-group">
                <input class="form-control" type="text" id="name" wire:model="name"
                    placeholder="Full Name" required="true" />
                    @error('name')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="name" wire:model="phone"
                    placeholder="Contact (WhatsApp Number Only)" required="true" />
                    @error('phone')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <select id="bank" required
                class="form-control select2 rounded-3" style="width: 100%;" wire:model="bank">
                <option value="">--- Bank ---</option>
                <option value="Access">Access</option>
                <option value="Ecobank">Ecobank</option>
                <option value="fcmb">fcmb</option>
                <option value="Fidelitybank">Fidelitybank</option>
                <option value="Firstbank">Firstbank</option>
                <option value="gtb">gtb</option>
                <option value="Jaiz">Jaiz</option>
                <option value="Keystone">Keystone</option>
                <option value="Kuda">Kuda</option>
                <option value="momo">momo</option>
                <option value="paycom">paycom</option>
                <option value="skyebank">skyebank</option>
                <option value="Stanbic">Stanbic</option>
                <option value="Standard Chartered Bank">Standard Chartered Bank </option>
                <option value="Sterling">Sterling</option>
                <option value="Suntrust">Suntrust</option>
                <option value="uba">uba</option>
                <option value="Unionbank">Unionbank</option>
                <option value="unity">unity</option>
                <option value="VFD">VFD</option>
                <option value="Wema">Wema</option>
                <option value="Zenith">Zenith</option>
            </select>
                    @error('bank')
                        <span style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <button wire:click="storeVendor" class="btn-action">Register</button>

            </div>
        </form>
    </div>
</div>
