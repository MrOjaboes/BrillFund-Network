<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FreelancingController extends Controller
{
    public function index()
    {
        return view('Clients.freelancing');
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
