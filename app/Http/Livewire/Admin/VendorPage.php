<?php

namespace App\Http\Livewire\Admin;

use App\Models\Vendors;
use Livewire\Component;
use Livewire\WithPagination;

class VendorPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $vendors = Vendors::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.vendor-page',compact('vendors'));
    }

    public function changeStatus($id)
    {

        $vendor = Vendors::find($id);
        //dd($vendor);
        if ($vendor) {
            $vendor->status = 1;
            $vendor->save();
        }

        return redirect()->back()->with('message','Vendor Approved Successfully');
    }
    public function banVendor($id)
    {

        $vendor = Vendors::find($id);
       // dd($vendor);
        if ($vendor) {
            $vendor->status = 0;
            $vendor->save();
        }
        return redirect()->back()->with('message','Vendor Banned Successfully');
    }
}
