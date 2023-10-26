<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrptoWithdrawal extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'bank',
        'acct_number',
        'acct_name',
        'status',
    ];

}
