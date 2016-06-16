<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'naam',
        'address',
        'postcode',
        'plaats',
        'telnr'
    ];

    // Werkt
    public function contacts()
    {
        return $this->hasMany('App\Contacts');
    }

}
