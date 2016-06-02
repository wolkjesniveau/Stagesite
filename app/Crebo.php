<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crebo extends Model
{
    protected $fillable = [
        'name',
        'number'
    ];

    public function crebo()
    {
        return $this->hasMany('App/Cohort');
    }
}
