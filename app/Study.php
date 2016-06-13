<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'education_id',
        'location_id',
        'cohort_id'
    ];


}
