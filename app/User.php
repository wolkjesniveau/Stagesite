<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'role_id',
        'contact_id'
    ];

    // Werkt
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    // Werkt
    public function Contact()
    {
        return $this->belongsTo('App\Contacts');
    }
}
