<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'id',
        'naam',
        'omschrijving',
        'status_id'
    ];

}
