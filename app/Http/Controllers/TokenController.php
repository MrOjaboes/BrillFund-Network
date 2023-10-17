<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketMessage;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tickets = Ticket::where('reciever_id',auth()->user()->id)->get();

        return view('Clients.token', compact('tickets'));
    }
    public function details(Ticket $ticket)
    {
        return view('Clients.token-details', compact('ticket'));
    }
    public function reply(Ticket $ticket, Request $request)
    {
        //dd($ticket);
        TicketMessage::create([
            'message' => $request->message2,
            'ticket_id' => $ticket->id,
        ]);
        return redirect()->back()->with('message', 'Message Sent Successfully!');
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
