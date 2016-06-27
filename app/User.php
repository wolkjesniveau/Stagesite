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
        'name',
        'email',
        'password',
        'role_id',
        'contact_id'
    ];

    /**
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

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


    public function IsDocent()
    {
        return ($this->role_id == 4);
    }

    public function IsNotDocent()
    {
        return ($this->role_id < 4);
    }

    public function IsAdmin()
    {
        return ($this->role_id == 5);
    }

    public function IsNotAdmin()
    {
        return ($this->role_id < 5);
    }
}
