<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Packages;
use Livewire\WithPagination;

class PackagesPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title;
    public $price;
    public function render()
    {
        $packages = Packages::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.packages-page',compact('packages'));
    }
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'price' => 'required',
        ]);

        Packages::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'naira' => $validated['price'] * 500,
        ]);
        session()->flash('message', 'Package Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $item = Packages::where('id', $id)->first();
        $this->location_id = $id;
        $this->title = $item->title;
        $this->price = $item->price;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'price' => 'required',
        ]);
        if ($this->location_id) {
            $item = Packages::find($this->location_id);
            $item->update([
                'title' => $this->title,
                'price' => $this->price,
                'naira' => $this->price ? $this->price * 500 : $item->naira,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Package Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            Packages::where('id', $id)->delete();
            session()->flash('message', 'Package Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->price = '';

    }
}
