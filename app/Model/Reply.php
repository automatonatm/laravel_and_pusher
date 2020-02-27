<?php

namespace App\Model;



use App\Model;
use App\User;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        $this->hasMany(Like::class);
    }
}
