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
            'is_read',
            'reciever_id',
            'sender_id',

    ];
}
