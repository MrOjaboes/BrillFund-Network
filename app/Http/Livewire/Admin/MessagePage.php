<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class MessagePage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $tickets = Ticket::where('reciever_id',auth()->user()->id)->orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.message-page',compact('tickets'));
    }
    public function closeTicket($id)
    {
        $ticket = Ticket::find($id);
        if ($ticket) {
            $ticket->status = 1;
            $ticket->save();        
        }
        return redirect()->back();
    }
}
