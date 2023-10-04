<?php

namespace App\Http\Livewire\Clients;

use App\Models\ContactUs;
use Livewire\Component;

class StoreContact extends Component
{
    public $name,$email,$content,$subject,$phone;
    public function render()
    {
        return view('livewire.clients.store-contact');
    }


    public function store()
    {
        $validated = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'content' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
        ContactUs::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'content' => $validated['content'],
            'subject' => $validated['subject'],
        ]);
        session()->flash('message', 'Message Sent Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->content = '';
        $this->subject = '';

    }
}
