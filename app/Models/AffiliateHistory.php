<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'type',
        'amount',
        'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
