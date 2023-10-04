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
         'user_id',
    ];
}
