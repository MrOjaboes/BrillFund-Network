<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank',
        'acct_number',
        'acct_name',
    ];
}
