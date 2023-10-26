<?php

namespace App\Http\Livewire\Admin;

use App\Models\CrptoMarket;
use Livewire\Component;
use Livewire\WithPagination;

class CrptoMarketPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $amount,$name,$address,$network;
    public function render()
    {
        $markets = CrptoMarket::orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.crpto-market-page', compact('markets'));
    }

    public function save()
    {
        $validated = $this->validate([
            'amount' => 'required',
            'name' => 'required',
            'address' => 'required',
            'network' => 'required',
        ]);
        $count = CrptoMarket::count();
        // dd($count);
        CrptoMarket::create([
            'name' => $validated['name'],
            'naira_amount' => $validated['amount'],
            'address' => $validated['address'],
            'network' => $validated['network'],
        ]);
        $this->resetInputFields();
        return redirect()->back()->with('message', 'New Coin Added Successfully');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $crptoMarket = CrptoMarket::where('id', $id)->first();
        $this->location_id = $id;
        $this->name = $crptoMarket->name;
        $this->amount = $crptoMarket->naira_amount;
        $this->address = $crptoMarket->address;
        $this->network = $crptoMarket->network;
    }
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'amount' => 'required',

        ]);

        if ($this->location_id) {
            $item = CrptoMarket::find($this->location_id);
            $item->update([
                'name' => $this->name,
                'naira_amount' => $this->amount,
                'address' => $this->address,
                'network' => $this->network,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Coin Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            CrptoMarket::where('id', $id)->delete();
            session()->flash('message', 'Coin Deleted Successfully.');
        }
    }
    private function resetInputFields()
    {
        $this->name = '';
        $this->amount = '';
        $this->network = '';
        $this->address = '';
    }
}
