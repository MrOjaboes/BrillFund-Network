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
    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
           'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        if ($request->hasFile('photo')) {
                 $fileName = $request->file('photo')->getClientOriginalName();
                $request->file('photo')->storeAs('Profiles/', $fileName,'public');
           }
        User::where('id',auth()->user()->id)->update([
            "profile_photo" => $fileName,
        ]);
        return redirect()->back()->with('message','Profile Photo Updated Successfully!');
    }

    public function updateProfile(Request $request)
    {
        User::where('id',auth()->user()->id)->update([
            "lname" => $request->lname,
            "name" => $request->name,
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
