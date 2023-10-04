<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tickets = Ticket::all();
        //dd($referal);
        return view('Clients.token', compact('tickets'));
    }
    public function store(Request $request)
    {
        Ticket::create([
            'email' => auth()->user()->email,
            'reason' => $request->reason,
            'message' => $request->message,
            'sender_id' => auth()->user()->id,
            'reciever_id' => 1,
        ]);
        return redirect()->back()->with('message', 'Message Sent Successfully!');
    }

}
