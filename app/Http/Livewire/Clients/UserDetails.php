<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class UserDetails extends Component
{
    public $name;
    public $email;
    public function render()
    {
        return view('livewire.clients.user-details');
    }
    public function mount(){
       $this->name = auth()->user()->name;
       $this->email = auth()->user()->email;
    }
    public function store(){
       dd($this->name);
    }

}
