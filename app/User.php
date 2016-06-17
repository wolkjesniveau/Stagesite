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
        return $this->belongsToMany('App\Role');
    }

    // Werkt
    public function Contact()
    {
        return $this->belongsTo('App\Contacts');
    }

    public function isAdmin()
    {
        return $this->role()->where('role_id', 5)->first();
    }

    public function isDocent()
    {
        return $this->role()->where('role_id', 4)->first();
    }


}
