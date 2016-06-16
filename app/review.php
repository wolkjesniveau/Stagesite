<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = [
        'review',
        '3,1'
    ];

    public function Internship()
    {
        return $this->belongsTo('App/Internship');
    }
}
