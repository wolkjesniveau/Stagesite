<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'begin_DATE',
        'eind_DATE',
        'contact_id',
        'status_id',
        'study_id',
    ];
}
