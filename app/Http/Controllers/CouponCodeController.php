<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AffiliateBalance;
use App\Models\TransferInfo;

class CouponCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function all_codes()
    {
        $codes = CouponCode::where('user_id',auth()->user()->id)->where('status',1)->get();
        return view('Clients.all-codes', compact('codes'));
    }
    public function generate_code()
    {
        $affiliate_balance = AffiliateBalance::where('user_id', auth()->user()->id)->first();
        $transfer_details = TransferInfo::orderBy('created_at','DESC')->first();
        return view('Clients.generate_code', compact('affiliate_balance','transfer_details'));
    }
    public function send_code(Request $request)
    {
        $request->validate([
            'reciept' => 'required|image|max:500',
            'amount_paid' => 'required|in:5000,10000,15000,20000,25000',
            'number_of_code' => 'required|in:1,2,3,4,5',
        ]);
        if ($request->hasFile('reciept')) {
            $fileName = $request->file('reciept')->getClientOriginalName();
            $request->file('reciept')->storeAs('Coupons/', $fileName, 'public');
        }
        if ($request->amount_paid == 5000) {
            CouponCode::create([
                'user_id' => auth()->user()->id,
                'screenshot' => $fileName,
                'user_name' => auth()->user()->name,
                'amount' => $request->amount_paid,
                'naira_equilvalent' => $request->amount_paid * 820,
                'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
            ]);
        }
        if ($request->amount_paid == 10000) {
            for ($i = 1; $i <=2; $i++) {
                CouponCode::create([
                    'user_id' => auth()->user()->id,
                    'screenshot' => $fileName,
                    'user_name' => auth()->user()->name,
                    'amount' => $request->amount_paid /2,
                    'naira_equilvalent' => $request->amount_paid * 820,
                    'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
                ]);
            }

        }
        if ($request->amount_paid == 15000) {
            for ($i = 1; $i <=3; $i++) {
                CouponCode::create([
                    'user_id' => auth()->user()->id,
                    'screenshot' => $fileName,
                    'user_name' => auth()->user()->name,
                    'amount' => $request->amount_paid /3,
                    'naira_equilvalent' => $request->amount_paid * 820,
                    'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
                ]);
            }

        }
        if ($request->amount_paid == 20000) {
            for ($i = 1; $i <=4; $i++) {
                CouponCode::create([
                    'user_id' => auth()->user()->id,
                    'screenshot' => $fileName,
                    'user_name' => auth()->user()->name,
                    'amount' => $request->amount_paid / 4,
                    'naira_equilvalent' => $request->amount_paid * 820,
                    'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
                ]);
            }

        }
        if ($request->amount_paid == 25000) {
            for ($i = 1; $i <=5; $i++) {
                CouponCode::create([
                    'user_id' => auth()->user()->id,
                    'screenshot' => $fileName,
                    'user_name' => auth()->user()->name,
                    'amount' => $request->amount_paid /5,
                    'naira_equilvalent' => $request->amount_paid * 820,
                    'code' => auth()->user()->name . '_' . strtoupper(Str::random(10)),
                ]);
            }

        }
        return redirect()->back()->with('message', 'Code Generated Successfully!');
    }
}
