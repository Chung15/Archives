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
        'firstname','lastname', 'patronymic', 'INN', 'passport_number','passport_given','passport_date','passport_link','dateOfBirth', 'gender','maritalStatus','email', 'password', 'terms',
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

     public static $editValidationRules = [
            'email' => 'required|email|max:255|exists:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'patronymic' => 'required',
            'INN' => 'required',
            'passport_number' => 'required',
            'passport_given' => 'required',
            'passport_date' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
            'maritalStatus' => 'required',
            
        ];
   


     public function adress() {
        return $this->hasMany('App\Adress');
    }

    public function diploma() {
        return $this->hasMany('App\Diploma');
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
        return $this->hasMany('App\Publication');
    }
    public function other() {
        return $this->hasMany('App\Other');
    }

    public function leave() {
        return $this->hasMany('App\Leave');
    }

    public function title() {
        return $this->hasMany('App\AcademicTitle');
    }
    public function degree() {
        return $this->hasMany('App\AcademicDegree');
    }


}


