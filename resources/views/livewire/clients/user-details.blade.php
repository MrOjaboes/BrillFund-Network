<form class="form-horizontal form-element col-12" wire:submit.prevent="store()">
    @csrf
    <div class="form-group">
       <div class="col-sm-10">
          <label for="oldPass" class="col-sm-2 form-label">User Name</label>
        <input type="text" class="form-control rounded-3" placeholder="Username" wire:model="name">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-10">
          <label for="newPass" class="col-sm-2 form-label">Email</label>
        <input type="email" class="form-control rounded-3" value="{{ Auth::user()->email }}"  placeholder="Email" wire:model="email">
      </div>
    </div>                

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn-custom w-p100 waves-effect waves-dark">Submit</button>
      </div>
    </div>
  </form>