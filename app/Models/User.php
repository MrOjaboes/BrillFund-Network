<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'contact',
        'note',
        'name',
        'linkedin',
        'facebook',
        'twitter',
        'profile_photo',
        'dp',
        'secret_password',
        'whatsapp',
         'email',
         'user_type',
         'referal_code',
         'status',
         'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
       return $this->hasOne(Profile::class,'user_id');
    }
    public function userPost()
    {
        return $this->hasMany(UserPost::class, 'post_id');
    }
    public function coupons()
    {
       return $this->hasMany(CouponCode::class,'user_id');
    }
    public function affiliateBalance()
    {
       return $this->hasOne(AffiliateBalance::class,'user_id');
    }
    public function withdrawal()
    {
       return $this->hasOne(Withdrawals::class,'user_id');
    }
    public function network()
    {
       return $this->hasMany(Network::class,'user_id');
    }
}
