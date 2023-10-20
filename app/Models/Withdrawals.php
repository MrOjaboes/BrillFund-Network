<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawals extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'bank',
        'naira_equilvalent',
        'user_id',
        'status',
        'amount',
        'note',

    ];
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
