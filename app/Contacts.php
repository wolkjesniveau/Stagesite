<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'surname',
        'insertion',
        'name',
        'email',
        'tel',
        'mobile',
        'company_id'
    ];

    // Werkt
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}
