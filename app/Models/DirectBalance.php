<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectBalance extends Model
{
    use HasFactory;
    protected $fillable = [
        'balance',//not
        'naira_equilvalent',
        'user_id',
    ];
}
