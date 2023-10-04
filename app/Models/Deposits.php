<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    use HasFactory;
    protected $fillable = [
        'balance',//not
        'naira_equilvalent',
        'description',
        'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
