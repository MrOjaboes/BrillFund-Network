<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'file_link',
        'file_title',
        'file_desc',
    ];
}
