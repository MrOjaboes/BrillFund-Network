<?php

namespace App\Http\Controllers;

use App\Models\CrptoMarket;
use App\Models\CrptoWithdrawal;
use Illuminate\Http\Request;

class CrptoMarketController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $coins = CrptoMarket::all();
        return view('Clients.crypto-market',compact('coins'));
    }
    public function details(CrptoMarket $crpto)
    {
        return view('Clients.crypto-market-details',compact('crpto'));
    }
    public function store(Request $request)
    {
       // dd($request->all());
        CrptoWithdrawal::create([
            'amount' => $request->crpto_total,
            'bank' => auth()->user()->profile->bank,
            'acct_number' => auth()->user()->profile->acct_number,
            'acct_name' => auth()->user()->profile->acct_name,
        ]);
        return redirect()->back()->with('message','Request Submitted Successfully!');
    }
}
