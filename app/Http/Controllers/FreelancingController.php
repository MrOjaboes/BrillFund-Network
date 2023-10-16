<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FreelancingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Clients.freelancing');
    }
    public function updateDp(Request $request)
    {
       // dd('ok');
        $request->validate([
           'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        if ($request->hasFile('photo')) {
                 $fileName = $request->file('photo')->getClientOriginalName();
                $request->file('photo')->storeAs('Profiles/DP', $fileName,'public');
           }
        User::where('id',auth()->user()->id)->update([
            "dp" => $fileName,
        ]);
        return redirect()->back()->with('message','DP Updated Successfully!');
    }
    public function store(Request $request)
    {
        User::where('id',auth()->user()->id)->update([
            "fname" => $request->fname,
            "lname" => $request->lname,
            "name" => $request->name,
            "email" => $request->email,
            "contact" => $request->contact,
            "linkedin" =>  $request->linkedin,
            "facebook" => $request->facebook,
            "twitter" => $request->twitter,
            "whatsapp" => $request->whatsapp,
            "note" => $request->note,
        ]);
        return redirect()->back()->with('message', 'Details Updated Successfully!');
    }
}
