<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
     /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'diploma_type','seria_number','thesis_topic', 'specialization','department','university', 'year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'diploma_type' => 'required',
            'seria_number' => 'required',
            'specialization' => 'required',
            'university' => 'required',
            'year' => 'required',

        ];

	public function user() {
        return $this->belongsTo('App\User');
    }
}
