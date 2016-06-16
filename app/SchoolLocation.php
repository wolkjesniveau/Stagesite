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

    // Werkt
    public function School()
    {
        return $this->belongsTo('App\School');
    }
}
