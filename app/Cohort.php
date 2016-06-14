<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $fillable = [
        'name',
        'schoolyear',
    ];

    public function crebo()
    {
        return $this->hasMany('App/Crebo');
    }

}
