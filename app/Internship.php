<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'begin_DATE',
        'eind_DATE',
    ];
}
