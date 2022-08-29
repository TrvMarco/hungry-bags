<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // protected $guarded = ['name'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
