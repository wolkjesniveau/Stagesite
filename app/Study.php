<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'location_id',
        'cohort_id',
        'crebo_id'
    ];


}
