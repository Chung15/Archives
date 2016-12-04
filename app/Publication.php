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
       'type', 'authors', 'name',  'specialisation', 'description', 'place', 'published_on',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'type' => 'required',
            'authors' => 'required',
            'name' => 'required',
            'specialisation' => 'required',
            'description' => 'required',
            'place' => 'required',
            'published_on' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }

    /* public function options() {

        return $this->belongsToMany('App\User', '');
    }*/
}
