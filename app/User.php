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
    public $table = "users";
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
        foreach ($this->role()->get() as $role)
        {
            if ($role->id == 5)
            {
                return true;
            }
        }

        return false;

    }

    public function isDocent()
    {
        return $this->role()->where('role_id', 4)->first();
    }


}
