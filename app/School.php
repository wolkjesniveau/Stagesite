<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name'
    ];

    // Werkt
    public function schoolLocations()
    {
        return $this->hasMany('App\SchoolLocation');
    }
}
