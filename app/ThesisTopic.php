<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisTopic extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','title', 'student_name', 'student_group', 'academic_year',
    ];

   

    public static $validationRules = [
            'type' => 'required',
            'title' => 'required',
            'student_name' => 'required',
            'student_group' => 'required',
            'academic_year' => 'required',
        ];
        
    public function user() {
        return $this->belongsTo('App\User');
    }
}
