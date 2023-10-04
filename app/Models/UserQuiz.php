<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz_id',
        'answer',
        'is_correct',
        'status',
        'user_id'
    ];
}
