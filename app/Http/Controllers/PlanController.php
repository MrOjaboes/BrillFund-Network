<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Network;
use App\Models\Packages;
use App\Models\CouponCode;
use Illuminate\Http\Request;
use App\Models\ActivityBalance;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $plans = Packages::all();
        //dd($referal);
        return view('Clients.plans', compact('plans'));
    }
    public function planUpgrade(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|exists:coupon_codes,code',
        ]);
        $code = CouponCode::where('code', $request->coupon_code)->first();
        if ($code->status == 0) {
            return redirect()->back()->with('error', 'Coupon Not yet Activated!');
        }
        $new_package = Packages::where('naira', $code->amount)->first();
        User::where('id', auth()->user()->id)->update([
            'package_id' => $new_package->id,
        ]);
        if (auth()->user()->package_id) {
            $balance = ActivityBalance::where('user_id', auth()->user()->id)->sum('balance');
            if (auth()->user()->package_id == 1) { //3500 $7
                ActivityBalance::where('user_id', auth()->user()->id)->update([
                    'balance' => $balance + 3,
                ]);
            } elseif (auth()->user()->package_id == 2) { //5000 $10
                ActivityBalance::where('user_id', auth()->user()->id)->update([
                    'balance' => $balance + 5,
                ]);
            } elseif (auth()->user()->package_id == 3) {  //7500 $15
                ActivityBalance::where('user_id', auth()->user()->id)->update([
                    'balance' => $balance + 3,
                ]);
            } elseif (auth()->user()->package_id == 4) { //12500 $25

                ActivityBalance::where('user_id', auth()->user()->id)->update([
                    'balance' => $balance + 5,
                ]);
            }
        }
        return redirect()->back()->with('message', 'Plan Upgraded Successfully!');
    }
}
