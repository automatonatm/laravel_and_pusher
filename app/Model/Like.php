<?php

namespace App\Model;



use App\Model;
use App\User;

class Like extends Model
{
    protected  $guarded = [];

    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
