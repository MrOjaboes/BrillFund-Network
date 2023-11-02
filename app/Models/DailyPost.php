<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',//not
        'content',
        'photo',
        'link',
        'status',
        'user_status',
        ];
        public function userPost()
        {
            return $this->belongsToMany(DailyPost::class, 'user_posts', 'post_id', 'user_id');
        }
}
