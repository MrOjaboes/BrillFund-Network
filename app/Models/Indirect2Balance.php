<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indirect2Balance extends Model
{
    use HasFactory;
    protected $fillable = [
        'balance',//not
        'naira_equilvalent',
        'user_id',
    ];
}
