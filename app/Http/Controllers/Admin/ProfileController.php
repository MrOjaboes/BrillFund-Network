<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TransferInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(Request $request)
    {
$transfer_details = TransferInfo::where('user_id',auth()->user()->id)->first();
        return view('Admin.profile',compact('transfer_details'));
    }
    public function updateTransferDetails(Request $request)
    {
        $request->validate([
            'bank' => 'required',
            'acct_number' => 'required',
            'acct_name' => 'required',
        ]);
        TransferInfo::where('user_id',auth()->user()->id)->update([
            'bank' => $request->bank,
            'acct_number' => $request->acct_number,
            'acct_name' => $request->acct_name,
        ]);
        return redirect()->back()->with('message', 'Details updated succesfully');
    }
    public function updateDetails(Request $request)
    {
        $request->validate([
            'email' => '',
            'name' => '',
        ]);
        User::find(auth()->user()->id)->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        return redirect()->back()->with('message', 'Details updated succesfully');
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
