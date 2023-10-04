<?php

namespace App\Http\Livewire;

use App\Models\Vendors;
use Livewire\Component;

class StoreVendor extends Component
{
    public $name, $phone, $bank;
    public function render()
    {
        return view('livewire.store-vendor');
    }
    public function storeVendor()
    {
        $validated = $this->validate([
            'name' => 'required',
            'phone' => 'required|unique:vendors,phone',
            'bank' => 'required',
        ]);
        Vendors::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'bank' => $validated['bank'],
        ]);
        session()->flash('message', 'Package Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->phone = '';
        $this->bank = '';

    }
}
