<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','place', 'specialisation', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'name' => 'required',
            'place' => 'required',
            'specialisation' => 'required',
            'description' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }

    /* public function options() {

        return $this->belongsToMany('App\User', '');
    }*/
}