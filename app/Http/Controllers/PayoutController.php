<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class PayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Clients.payout-details');
    }
    public function update(Request $request)
    {
        Profile::where('user_id', auth()->user()->id)->update([
            'acct_name' => $request->acct_name,
            'acct_number' => $request->acct_number,
            'bank' => $request->bank,
        ]);
        return redirect()->back()->with('message', 'Details Updated Successfully!');
    }
}
