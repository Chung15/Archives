<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicDegree extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'academic_degree','seria_number','thesis_topic', 'specialization', 'year', 'degree_link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'academic_degree' => 'required',
            'seria_number' => 'required',
            'specialization' => 'required',
            'year' => 'required',

        ];

	public function user() {
        return $this->belongsTo('App\User');
}
}
