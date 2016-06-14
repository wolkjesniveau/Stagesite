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

    // Werkt
    public function status()
    {
        return $this->belongsTo('App\Status');
    }


    public function InternshipUsers()
    {
        return $this->hasMany('App\InternshipUser');
    }

    // Werkt
    public function contact()
    {
        return $this->belongsTo('App\Contacts');
    }

    // Werkt
    public function Study()
    {
        return $this->belongsTo('App\Study');
    }
}
