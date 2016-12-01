<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'patronymic',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'firstname' => 'required|min:6',
            'lastname' => 'required|min:6',
            'patronymic' => 'required|min:6',
            //'dateOfBirth' => 'required',

        ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
