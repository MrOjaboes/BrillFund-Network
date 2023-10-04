<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'country',
        'gender',
        'dob',
        'state',
        'acct_number',
        'acct_name',
        'bank',
        'other',
        'photo',
        'crpto_bank',
        'crpto_address'

    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
        # code...
    }
}
