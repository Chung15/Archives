<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'topic', 'description','start_date','end_date', 'training_link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'topic' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
