<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolLocation extends Model
{
    protected $fillable = [
        'streetname',
        'postcode',
        'location',
        'school_id'
    ];

    public function locations()
    {
        return $this->hasMany('App/School', 'App/Study');
    }
}
