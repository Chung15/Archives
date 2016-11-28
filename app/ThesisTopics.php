<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThesisTopics extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','title', 'student_name', 'student_number', 'academic_year',
    ];

   

    public static $validationRules = [
            'type' => 'required',
            'title' => 'required',
            'student_name' => 'required',
            'student_number' => 'required',
            'academic_year' => 'required',
        ];
        
    public function user() {
        return $this->belongsTo('App\User');
    }

}

