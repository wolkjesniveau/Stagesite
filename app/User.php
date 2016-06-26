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

    public function IsAdmin($request)
    {
        if ($request->role()) {
            return true;
        }

        return false;

    }

    public function IsDocent()
    {
        return $this->role()->where('role_id', 4)->first();
    }


}
