<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolLocation extends Model
{
    protected $fillable = [
        'streetname',
        'postcode',
        'location',
    ];
}
