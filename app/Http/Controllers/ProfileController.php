<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Packages;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $check = Network::where('user_id',auth()->user()->id)->first();
        $referal = User::where('id',$check->parent_user_id)->first();
        $plan = Packages::where('id',auth()->user()->package_id)->first();
       //dd($referal->name);
        return view('Clients.profile',compact('plan','referal'));
    }
    public function updateProfile(Request $request)
    {
        Profile::where('user_id',auth()->user()->id)->update([
            'name' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'bank' => $request->bank,
            'acct_number' => $request->acct_number,
            'acct_name' => $request->acct_name,
            'country' => $request->country,
            'crpto_address' => $request->crpto_address,
            'crpto_bank' => $request->crpto_bank,
        ]);

        return redirect()->back()->with('message','Profile Updated Successfully!');
    }
    public function updateDetails(Request $request)
    {
        User::where('id',auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('message','Details Updated Successfully!');
    }
    public function updatePassword(Request $request)
    {
        $validate = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
       // dd($request->all());
        $user = User::find(Auth::user()->id);
        if ($user)
            if (Hash::check($request['oldpassword'], $user->password) && $validate) {
                $user->password = Hash::make($request['password']);
                $user->save();
                return redirect()->back()->with('message', 'Password Updated successfully');
            } else {
                return redirect()->back()->with('error', 'Password do not match');
            }
    }
}
