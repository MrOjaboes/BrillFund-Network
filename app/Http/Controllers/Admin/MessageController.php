<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketMessage;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin.Messages.index');
    }

    public function details(Ticket $ticket)
    {
        $responses = TicketMessage::where('ticket_id',$ticket->id)->get();
      //dd($ticket->sender_id);
        return view('Admin.Messages.details', compact('ticket','responses'));
    }
    public function reply(Ticket $ticket, Request $request)
    {
       //dd($ticket->sender_id);
        TicketMessage::create([
            'message' => $request->message2,
            'ticket_id' => $ticket->id,
        ]);
        Ticket::create([
            'message' => $request->message2,
            'sender_id' => auth()->user()->id,
            'email' => auth()->user()->email,
            'reason' =>  $ticket->reason,
            'reciever_id' => $ticket->sender_id,
        ]);
        return redirect()->back()->with('message', 'Message Sent Successfully!');
    }
}
