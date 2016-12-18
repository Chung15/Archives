<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
     /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'leave_type', 'other_leave', 'comment', 'start_date', 'end_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'leave_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

            
        ];
    public function user() {
        return $this->belongsTo('App\User');
    }

     public function children() {
        return $this->belongsTo('App\Children');
    }
}
