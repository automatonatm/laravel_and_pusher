<?php

namespace App\Model;



use App\Model;

class Category extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
