<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityBalance extends Model
{
    use HasFactory;
    protected $fillable = [
        'deposit',
        'withdrawal',
        'description',
        'balance',//not
        'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
