<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','date', 'specialisation', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'title' => 'required',
            'date' => 'required',
            'specialisation' => 'required',
            'description' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
