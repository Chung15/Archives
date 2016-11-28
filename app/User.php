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
        return $this->hasMAny('App\Adress');
    }

    public function education() {
        return $this->hasMAny('App\Education');
    }

    public function children() {
        return $this->hasMAny('App\Children');
    }

    public function trainings() {
        return $this->hasMAny('App\Trainings');
    }

    public function thesisTopic() {
        return $this->hasMAny('App\thesisTopic');
    }

    public function publications() {
        return $this->hasMAny('App\Publications');
    }
    public function other() {
        return $this->hasMAny('App\Other');
    }

}


