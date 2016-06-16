<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'name_study',
        'school_location_id',
        'cohort_id',
        'crebo_id'
    ];

    // Werkt
    public function school_location()
    {
        return $this->belongsTo('App\SchoolLocation');
    }

}
