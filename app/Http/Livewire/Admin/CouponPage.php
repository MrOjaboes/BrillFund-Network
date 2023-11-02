<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CouponCode;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CouponPage extends Component

{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $amount;
    public function render()
    {
        $coupons = CouponCode::where('user_id', auth()->user()->id)->where('status', 0)->orderBy('created_at', 'DESC')->latest()->paginate(10);
        return view('livewire.admin.coupon-page', compact('coupons'));
    }
    public function activateCoupon($id)
    {
        $coupon = CouponCode::find($id);
        if ($coupon) {
            $coupon->status = 1;
            $coupon->save();
        }
        return redirect()->back();
    }
    public function deactivateCoupon($id)
    {
        $coupon = CouponCode::find($id);
        if ($coupon) {
            $coupon->status = 0;
            $coupon->save();
        }
        return redirect()->back();
    }
    public function generateCode()
    {
        $validated = $this->validate([
            'amount' => 'required',
        ]);

        if ($this->amount) {
            for ($i = 1; $i <= $this->amount; $i++) {
                CouponCode::create([
                    'user_id' => auth()->user()->id,
                    'user_name' => auth()->user()->name,
                    'amount' => 5000,
                    'naira_equilvalent' => 5000,
                    'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
                ]);
            }
        }

        $this->resetInputFields();
        return redirect()->back()->with('message', 'Code generated Successfully');
    }

    private function resetInputFields()
    {
        $this->amount = '';
    }
}
