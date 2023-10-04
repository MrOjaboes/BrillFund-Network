<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CouponCode;

class VerifyCode extends Component
{
    public $code;
    public function render()
    {
       // $code_details = $this->checkCode();
        return view('livewire.verify-code');
    }
    public function checkCode()
    {
        $validated = $this->validate([
            'code' => 'required|exists:coupon_codes,code',
        ]);
        $check = CouponCode::where('code',$this->code)->first();
        //dd($check);
       // return view('livewire.verifed_code');
    }
}
