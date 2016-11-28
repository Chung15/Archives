<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'topic', 'description','starting_date','end_date', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'zip' => 'required|zip|',
            'phone' => 'required|min:',
            'street' => 'required',
            'city' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
