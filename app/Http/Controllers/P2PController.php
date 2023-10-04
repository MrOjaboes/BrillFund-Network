<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\History;
use App\Models\Network;
use App\Models\Profile;
use App\Models\Deposits;
use Illuminate\Http\Request;
use App\Models\ActivityBalance;
use App\Models\AffiliateBalance;
use Illuminate\Support\Facades\Hash;

class P2PController extends Controller
{
    //
    public function index()
    {
        return view('Clients.p2p_reg');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,name|string|max:20',
            'email' => 'required|email|unique:users,email|string',
            'contact' => 'required', //required|exists:coupon_codes,code
            'password' => 'required|min:8|confirmed',
            'referal_code' => '',
        ]);
       // dd($request->all());

                    $current_date = date('Y-m-d');
        AffiliateBalance::create([
            'user_id' => auth()->user()->id,
            'direct_balance' => 4.63,
            'naira_equilvalent' => 3800,
        ]);
        $direct_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', auth()->user()->id)->sum('direct_balance');
        $indirect_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', auth()->user()->id)->sum('indirect_balance');
        $indirect2_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', auth()->user()->id)->sum('indirect2_balance');
        $total = $direct_balance + $indirect_balance + $indirect2_balance;
        AffiliateBalance::where('user_id', auth()->user()->id)->update(['total' => $total]);

        $url = url('register?ref=');
        $user = new User();
        $user->fname = $request->first_name;
        $user->lname = $request->last_name;
        $user->name = $request->username;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->referal_code = $url . $request->username;
        $user->save();

        //Credit Welcome Bonus
        Deposits::create([
            'user_id' => $user->id,
            'balance' => '3000BP',
            'description' => 'Welcome Bonus for ' . $request->username,
        ]);
        $deposit = Deposits::whereDate('created_at', $current_date)->sum('balance');
        ActivityBalance::create([
            'user_id' => $user->id,
            'balance' => $deposit,
        ]);
        //Affiliate Balance
        AffiliateBalance::create([
            'user_id' => $user->id,
        ]);
        $direct_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', $user->id)->sum('direct_balance');
        $indirect_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', $user->id)->sum('indirect_balance');
        $indirect2_balance = AffiliateBalance::whereDate('created_at', $current_date)->where('user_id', $user->id)->sum('indirect2_balance');
        $total = $direct_balance + $indirect_balance + $indirect2_balance;
        AffiliateBalance::where('user_id', $user->id)->update(['total' => $total]);
        Profile::create([
            'user_id' => $user->id,
        ]);
        Network::create([
            'user_id' => $user->id,
            'referal_code' => $user->referal_code,
            'parent_user_id' => auth()->user()->id,
        ]);
        History::create([
            'user_id' => auth()->user()->id,
            'content' => auth()->user()->name . ' Registered '. $user->name.' as an Affiliate Today!',
            'name' => auth()->user()->name,
        ]);
        return redirect()->back()->with('message', 'Registeration Completed Successfully!');
    }
}
