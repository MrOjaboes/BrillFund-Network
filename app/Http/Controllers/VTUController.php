<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AffiliateBalance;
use Illuminate\Support\Facades\Http;

class VTUController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       
        $affiliate_balance = AffiliateBalance::where('user_id',auth()->user()->id)->first();
        return view('Clients.vtu', compact('affiliate_balance'));
    }
    public function recharge(Request $request)
    {
        $response = Http::get('https://vtu.ng/wp-json/api/v1/balance?username=BrillfundNetwork&password=Brill@money120');
        return json_decode($response);
        return view('Clients.vtu');
    }
}
