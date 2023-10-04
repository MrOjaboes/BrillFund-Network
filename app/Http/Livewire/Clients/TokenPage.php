<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;

class TokenPage extends Component
{
    public function render()
    {
        return view('livewire.clients.token-page');
    }
    public function store()
    {
        dd('ok');
        return view('livewire.clients.token-page');
    }
}
