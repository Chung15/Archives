<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'patronymic', 'INN', 'title','grade', 'gender','maritalStatus','email', 'password', 'terms',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $validationRules = [
            'email' => 'required|email|max:255|exists:users',
            'password' => 'required|min:6',
        ];


     public function adress() {
        return $this->hasMany('App\Adress');
    }

    public function education() {
        return $this->hasMany('App\Education');
    }

    public function child() {
        return $this->hasMany('App\Child');
    }

    public function training() {
        return $this->hasMany('App\Training');
    }

    public function thesisTopic() {
        return $this->hasMany('App\thesisTopic');
    }

    public function publication() {
        return $this->hasMany('App\Publications');
    }
    public function other() {
        return $this->hasMany('App\Other');
    }

    public function leave() {
        return $this->hasMany('App\Leaves');
    }

}


