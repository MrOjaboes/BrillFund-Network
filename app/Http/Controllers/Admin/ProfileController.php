<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        return view('Admin.profile');
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
