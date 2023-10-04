<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateBalance extends Model
{
    use HasFactory;
    protected $fillable = [
        'direct_balance',
        'indirect_balance',
        'naira_equilvalent',
        'indirect2_balance',//not
        'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
