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
       'type', 'authors', 'title',  'specialisation', 'description', 'journal', 'published_on',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'type' => 'required',
            'authors' => 'required',
            'title' => 'required',
            'specialisation' => 'required',
            'description' => 'required',
            'journal' => 'required',
            'published_on' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function authors () {
        return $this->hasmany('App\Author');
    }

    /* public function options() {

        return $this->belongsToMany('App\User', '');
    }*/
}
