<div>
    <form class="form-horizontal form-element" wire:submit.prevent="store">
        
        <div class="form-group row">

            <div class="col-sm-6">
                <select class="form-control" name="reason" id="">
                    <option value="">--- Select Token ---</option>
                    <option value="USDT">USDT</option>
                    <option value="BTC">BTC</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <textarea name="" class="form-control" placeholder="Message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>


        <div class="col-6">
            <button type="submit" class="btn-custom w-p100" style="background: #FE740E;color:white">Send
                Message
            </button>
        </div>
    </form>
</div>
