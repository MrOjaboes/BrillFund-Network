<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
         'status',
         'amount',
         'used_by',
         'reffered_by',
         'user_name',
         'screenshot',
         'used_status',
         'naira_equilvalent',
         'user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
