<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
            'message',
            'email',
            'reason',
            'status',
            'is_read',
            'reciever_id',
            'sender_id',

    ];
    public function sender()
    {
       return $this->belongsTo(User::class,'sender_id');
    }

    public function messages()
    {
       return $this->hasMany(TicketMessage::class,'ticket_id');
    }
}
