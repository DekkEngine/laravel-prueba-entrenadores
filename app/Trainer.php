<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    /**
     * @return string
    */
    public function getRouteKeyName(){
        return 'slug';
    }
}
